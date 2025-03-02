import { Server } from "socket.io";
import { chatUserModel } from "./model/index.js";
import { save } from "./helper/commonModelService.js";

export function chat(server) {
    // Configure CORS for Socket.IO
    const io = new Server(server, {
        cors: {
            origin: "*", // Allow requests from this origin
            methods: ["GET", "POST"], // Allowed HTTP methods
        },
    });

    // Store chatusers and their socket IDs
    const chatusers = {};

    // Store pending messages for unavailable users
    const pendingMessages = {};

    // Handle socket connections
    io.on("connection", (socket) => {
        console.log(`A user connected: ${socket.id}`);

        // Listen for a new user joining
        socket.on("user joined", async (userId) => {
            chatusers[userId] = socket.id; // Store the userId and socket ID
            console.log(`${userId} joined the chat`);

            // Check if there are pending messages for this user
            if (pendingMessages[userId]) {
                pendingMessages[userId].forEach((message) => {
                    socket.emit("private message", message); // Deliver pending messages
                });
                delete pendingMessages[userId]; // Clear pending messages
            }

            // Fetch previous messages from the database
            const messages = await chatUserModel
                .find({ $or: [{ from: userId }, { to: userId }] })
                .sort({ timestamp: 1 }) // Sort by timestamp (oldest first)
                .exec();

            // Send previous messages to the user
            messages.forEach((message) => {
                socket.emit("private message", {
                    from: message.from,
                    message: message.message,
                    timestamp: message.timestamp,
                });
            });

            io.emit("chat message", {
                user: "System",
                message: `${userId} joined the chat`,
            }); // Broadcast to all clients
        });

        // Listen for private messages
        socket.on("private message", async (data) => {
            const { from, to, message } = data;
            const toSocketId = chatusers[to]; // Get the recipient's socket ID

            // Store the message in the database
            const messageData = {
                from: from,
                to: to,
                message: message,
                timestamp: new Date(),
            };
            await save(messageData, chatUserModel);
            console.log("Message saved:", messageData);

            if (toSocketId) {
                // Send the message to the recipient
                io.to(toSocketId).emit("private message", { from, message });
                console.log(`Private message from ${from} to ${to}: ${message}`);
            } else {
                // Store the message if the recipient is not available
                if (!pendingMessages[to]) {
                    pendingMessages[to] = []; // Initialize the pending messages array
                }
                pendingMessages[to].push({ from, message });
                console.log(`Message from ${from} to ${to} is pending.`);
            }
        });

        // Handle user disconnect
        socket.on("disconnect", () => {
            const userId = Object.keys(chatusers).find(
                (key) => chatusers[key] === socket.id
            );
            if (userId) {
                console.log(`${userId} left the chat`);
                io.emit("chat message", {
                    user: "System",
                    message: `${userId} left the chat`,
                }); // Broadcast to all clients
                delete chatusers[userId]; // Remove the user from the list
            }
        });
    });
}






