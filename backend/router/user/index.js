import { Router } from "express";
const userRoute = Router();
import { authRoute } from "./auth.js";
import { communityRoute} from "./community.js"
import { verifyUserToken } from "../../middleware/index.js";

userRoute.get("/", (req, res) => {
    res.send("user route is working !!");
});

userRoute.use("/auth", authRoute);
userRoute.use("/community", verifyUserToken,communityRoute)


export { userRoute }

