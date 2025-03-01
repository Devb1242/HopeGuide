import { Router } from "express";
const mentoreRoute = Router();
import { authRoute } from "./auth.js";
// import { verifyUserToken } from "../../middleware/index.js";

mentoreRoute.get("/", (req, res) => {
    res.send("Mentore route is working !!");
});

mentoreRoute.use("/auth", authRoute);


export { mentoreRoute }

