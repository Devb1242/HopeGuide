import {Router} from "express";
import { addAuthController, loginController, logoutController } from "../../controller/mentore/index.js"
const authRoute = Router();

authRoute.get("/", (req, res) => {
    res.status(200).json({message: "mentore authRoute is working "});
})

authRoute.post("/register", addAuthController);
authRoute.post("/login", loginController);
authRoute.post("/logout", logoutController);

export {authRoute}
