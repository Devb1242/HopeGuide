import { Router } from "express";
import { addauthController,loginController, logoutController } from "../../controller/admin/index.js";
const authRoute = Router();

authRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn AuTh RoUtE iS wOrKiNg..!!" });
});

authRoute.post("/register", addauthController);
authRoute.post("/login", loginController);
authRoute.post("/logout", logoutController);

export { authRoute };
