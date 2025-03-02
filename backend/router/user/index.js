import { Router } from "express";
const userRoute = Router();
import { authRoute } from "./auth.js";
import { communityRoute} from "./community.js"
import { verifyUserToken } from "../../middleware/index.js";
import { loyearRoute } from "./loyearManage.js";
import { psychologistManageRoute } from "./psychologistManage.js";
import { mentoreManageRoute } from "./mentoreManage.js";

userRoute.get("/", (req, res) => {
    res.send("user route is working !!");
});

userRoute.use("/auth", authRoute);
userRoute.use("/community", verifyUserToken,communityRoute)
userRoute.use("/loyear", loyearRoute)
userRoute.use("/psychologist", psychologistManageRoute)
userRoute.use("/mentore", mentoreManageRoute)


export { userRoute }

