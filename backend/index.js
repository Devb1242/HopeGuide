// Import necessary modules using ES6 import
import express from 'express';
import cors from 'cors';
import config from "./config/config.js";
import mongoose from 'mongoose';
import v1 from "./router/v1.js"
import cookieParser from 'cookie-parser';
import { chat } from './chat.js';

chat()
// Create an instance of express
const app = express();

const corsOptions = {
    origin: "*", // Allow requests from this origin
    credentials: true
};


// // Configuration for cors
// var corsOptions = {
//     origin: "http://localhost:5430",
//     credentials: true
// };

// Middleware
app.use(cors());
app.use(express.json()); 
app.use(express.urlencoded({ extended: true })); 
app.use(cookieParser());

app.use("/v1", v1);
app.get('/', (req, res) => {
    res.status(200).json({ message: 'Welcome to the Hoop Guid!' });
});




// MongoDB URL
const MONGODB_URL = config.MONGODB_URL;

// Options for the connection
const options = {
    useNewUrlParser: true,
    useUnifiedTopology: true
};

// Connecting to MongoDB
mongoose.set('debug', true); 
mongoose.connect(MONGODB_URL,{ useNewUrlParser: true, useUnifiedTopology: true })
    .then(() => {
        console.log('Connected to MongoDB');
        // app.listen(config.PORT, () => {
        //     console.log(`Server is running on port ${config.PORT}`);

        // });
        // Create HTTP server
        const server = app.listen(config.PORT, () => {
            console.log(`Server is running on port ${config.PORT}`);
        });

        // Initialize Socket.IO
        chat(server);
    })
    .catch((err) => {
        console.error('Failed to connect to MongoDB', err);
    });





