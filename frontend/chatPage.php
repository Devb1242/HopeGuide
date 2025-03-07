<script src="https://cdn.socket.io/4.5.4/socket.io.min.js">
</script>
<script>
if (!sessionStorage.getItem('userId')) {
    window.location.href = './login.php';
} else {
    $userId = sessionStorage.getItem('userId');
    console.log($userId)
}
</script>
<?php
if(isset($_GET['mentoreId'])){
  $mentoreId = $_GET['mentoreId'];

  $mentoreName = $_GET['mentoreName'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Mentor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
    :root {
        --primary-color: #6366f1;
        --secondary-color: #f8fafc;
        --accent-color: #e2e8f0;
    }

    body {
        background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
        font-family: 'Segoe UI', system-ui, sans-serif;
    }

    .chat-container {
        max-width: 800px;
        margin: 2rem auto;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        background: white;
        height: 85vh;
        display: flex;
        flex-direction: column;
    }

    .chat-header {
        padding: 1.5rem;
        background: var(--primary-color);
        border-radius: 1rem 1rem 0 0;
        color: white;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .mentor-avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid white;
    }

    .chat-messages {
        flex: 1;
        overflow-y: auto;
        padding: 1.5rem;
        background: var(--secondary-color);
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .message {
        max-width: 75%;
        padding: 0.75rem 1rem;
        border-radius: 1rem;
        animation: messageSlide 0.3s ease-out;
        position: relative;
    }

    .message.user {
        background: var(--primary-color);
        color: white;
        align-self: flex-end;
        border-bottom-right-radius: 0.25rem;
    }

    .message.mentor {
        background: white;
        border: 1px solid var(--accent-color);
        align-self: flex-start;
        border-bottom-left-radius: 0.25rem;
    }

    .message-time {
        font-size: 0.75rem;
        color: #64748b;
        margin-top: 0.5rem;
        display: block;
    }

    .message.user .message-time {
        color: #e0e7ff;
    }

    .chat-input-area {
        padding: 1.5rem;
        border-top: 1px solid var(--accent-color);
        background: white;
        border-radius: 0 0 1rem 1rem;
    }

    .typing-indicator {
        padding: 0 1.5rem;
        height: 28px;
        color: #64748b;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .typing-dots {
        display: flex;
        gap: 0.25rem;
    }

    .typing-dot {
        width: 6px;
        height: 6px;
        background: #94a3b8;
        border-radius: 50%;
        animation: typing 1.4s infinite ease-in-out;
    }

    .typing-dot:nth-child(2) {
        animation-delay: 0.2s;
    }

    .typing-dot:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes typing {

        0%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-4px);
        }
    }

    @keyframes messageSlide {
        from {
            transform: translateY(10px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .message-input {
        border: 1px solid var(--accent-color);
        border-radius: 0.75rem;
        padding: 0.75rem 1rem;
        resize: none;
        transition: all 0.2s ease;
    }

    .message-input:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }

    .send-button {
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 0.5rem;
        padding: 0.75rem 1.25rem;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .send-button:hover {
        background: #4f46e5;
        transform: translateY(-1px);
    }

    .online-status {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.875rem;
    }

    .online-dot {
        width: 8px;
        height: 8px;
        background: #34d399;
        border-radius: 50%;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }
    </style>
</head>

<body>

    <?php include "./navbar.php"?>


    <!-- Chat Container -->

    <div class="chat-container">
        <!-- Chat Header -->
        <div class="chat-header">
            <!-- <img src="avatar-placeholder.jpg" alt="Mentor" class="mentor-avatar"> -->
            <div>
                <h5 class="mb-1"><?php echo $mentoreName?> </h5>

            </div>
        </div>

        <!-- Chat Messages -->
        <ul id="messages"></ul>
        <!-- <input type="text" id="message-input" placeholder="Type a message..."> -->
        <div class="chat-messages" id="chat-messages">
            <!-- Mentor Message -->
            <div class="message mentor">
                <div class="message-text">Hi there! How can I help you today? 😊</div>
                <span class="message-time">10:00 AM</span>
            </div>

            <!-- User Message -->
            <div class="message user">
                <div class="message-text">Hello! I need help with my project timeline.</div>
                <span class="message-time">10:02 AM</span>
            </div>
        </div>

        <!-- Chat Input -->
        <div class="chat-input-area">
            <div class="input-group">
                <textarea id="message-input" class="message-input form-control" placeholder="Type your message..."
                    rows="1"></textarea>
                <button class="send-button" id="send-button">
                    <i class="fa fa-send"></i>
                    <span>Send</span>
                </button>
            </div>
        </div>
    </div>

    <script>
    // Connect to the Node.js server
    const socket = io('http://localhost:5430');

    // DOM elements
    const username = sessionStorage.getItem('userId');
    const recipient = "<?php echo $mentoreId; ?>";
    const messageInput = document.getElementById('message-input');
    const chatMessages = document.getElementById('chat-messages');
    const sendButton = document.getElementById('send-button');
    const messages = document.getElementById('messages');
    socket.emit('user joined', username);
    // Function to add a new message to the chat UI
    function addMessageToChat(message, sender, isUser) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', isUser ? 'user' : 'mentor');

        messageDiv.innerHTML = `
        <div class="message-text">${message}</div>
        <span class="message-time">${new Date().toLocaleTimeString()}</span>
    `;

        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight; // Auto-scroll
    }

    // Send message function
    function sendMessage() {
        const message = messageInput.value.trim();
        if (message && username) {
            // Append to UI immediately
            addMessageToChat(message, username, true);

            // Emit message event
            socket.emit('private message', {
                from: username,
                to: recipient,
                message
            });
            fetch('http://localhost:5430/v1/user/mentore/getmentoreUserByID/' + recipient, {
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('token'),
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.message == "User not found !!") {

                        // Define the URL of the API endpoint
                        const url = 'http://localhost:5430/v1/user/mentore/addMentoreUser/';

                        // Define the data you want to send in the request body
                        const data = {
                          mentoreID: recipient,
                          userID: username
                        };

                        // Make the POST request using fetch
                        fetch(url, {
                                method: 'POST', // Specify the request method
                                headers: {
                                    'Content-Type': 'application/json' // Set the content type to JSON
                                },
                                body: JSON.stringify(data) // Convert the data to a JSON string
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                 console.log("data stored")
                            })
                            .then(responseData => {
                                console.log('Success:', responseData); // Handle the response data
                            })
                            .catch(error => {
                                console.error('Error:', error); // Handle any errors
                            });
                    }

                })
                .catch(error => console.log('Error:', error));
            // Clear input
            messageInput.value = '';
        }
    }

    // Send message on button click
    sendButton.addEventListener('click', sendMessage);

    // Send message on pressing Enter
    messageInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            sendMessage();
        }
    });

    // Listen for incoming messages
    socket.on('private message', (data) => {
        console.log("Pavan", data)
        if (data.to === username && data.from === recipient) {
            addMessageToChat(data.message, data.from, false);
        } else if (data.from === username && data.to === recipient) {
            addMessageToChat(data.message, data.from, true);
        }
    });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>