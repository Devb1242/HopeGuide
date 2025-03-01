import { Router } from "express";
const adminRoute = Router();
// import { verifyAdminToken } from "../../middleware/index.js";
import { authRoute } from "./auth.js";
import { loyearRoute } from "./loyearManage.js";
import { userManageRoute } from "./userManage.js";


adminRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn RoUtE iS wOkInG..!!" });
});

adminRoute.use("/auth", authRoute);
adminRoute.use("/loyear", loyearRoute)
adminRoute.use("/userManage", userManageRoute)
export { adminRoute };
