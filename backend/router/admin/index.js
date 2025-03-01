import { Router } from "express";
const adminRoute = Router();
// import { verifyAdminToken } from "../../middleware/index.js";
import { authRoute } from "./auth.js";
import { loyearRoute } from "./loyear.js";


adminRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn RoUtE iS wOkInG..!!" });
});

adminRoute.use("/auth", authRoute);
adminRoute.use("/loyear", loyearRoute)
export { adminRoute };
