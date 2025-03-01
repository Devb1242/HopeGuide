import { Router } from "express";
import {
  addUserController,
  getUserByIDController,
  getAllUserController,
  updateUserController,
  deleteUserController,
} from "../../controller/admin/index.js";
const userManageRoute = Router();

userManageRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn User RoUtE iS wOkInG..!!" });
});

userManageRoute.post("/addUser", addUserController);
userManageRoute.get("/getUserById/:id", getUserByIDController);
userManageRoute.get("/getAllUser", getAllUserController);
userManageRoute.put("/updateUser/:id", updateUserController);
userManageRoute.delete("/deleteUser/:id", deleteUserController);

export { userManageRoute };
