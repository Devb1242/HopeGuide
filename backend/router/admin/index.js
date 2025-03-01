import { Router } from "express";
const adminRoute = Router();
// import { verifyAdminToken } from "../../middleware/index.js";
import { authRoute } from "./auth.js";
import { loyearRoute } from "./loyearManage.js";
import { userManageRoute } from "./userManage.js";
import { mentoreManageRoute } from "./mentoreManage.js";
import { psychologistManageRoute } from "./psychologistManage.js";
import { verifyAdminToken } from "../../middleware/verifyToken.js";

adminRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn RoUtE iS wOkInG..!!" });
});

adminRoute.use("/auth", authRoute);
adminRoute.use("/loyear", verifyAdminToken, loyearRoute);
adminRoute.use("/userManage", verifyAdminToken, userManageRoute);
adminRoute.use("/mentoreManage", verifyAdminToken, mentoreManageRoute);
adminRoute.use("/psychologist", verifyAdminToken, psychologistManageRoute);

export { adminRoute };
