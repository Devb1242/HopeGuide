import { Router } from "express";
import {

  getUserByIDController,
  getAllUserController,

} from "../../controller/mentore/index.js";
const userManageRoute = Router();

userManageRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn User RoUtE iS wOkInG..!!" });
});


userManageRoute.get("/getUserById/:id", getUserByIDController);
userManageRoute.get("/getAllUser", getAllUserController);

export { userManageRoute };
