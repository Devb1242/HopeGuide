import { Router } from "express";
const userRoute = Router();
import { authRoute } from "./auth.js";
import { verifyUserToken } from "../../middleware/index.js";

userRoute.get("/", (req, res) => {
    res.send("user route is working !!");
});

userRoute.use("/auth", authRoute);


export { userRoute }

