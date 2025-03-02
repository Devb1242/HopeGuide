import { Router } from "express";
const mentoreRoute = Router();
import { authRoute } from "./auth.js";
import { mentoreManageRoute } from "./mentore.js";
import { userManageRoute } from "./userManage.js";
// import { verifyUserToken } from "../../middleware/index.js";

mentoreRoute.get("/", (req, res) => {
    res.send("Mentore route is working !!");
});

mentoreRoute.use("/auth", authRoute);
mentoreRoute.use("/mentore", mentoreManageRoute)
mentoreRoute.use("/userManage", userManageRoute)
export { mentoreRoute }

