import { Router } from "express";
import {
  getMentoreByIDController,
  getAllMentoreController,
  getmentoreUserByIDController,
  addMentoreUserController
} from "../../controller/user/index.js";
const mentoreManageRoute = Router();

mentoreManageRoute.get("/", (req, res) => {
  res.status(200).json({ message: "User Mentore RoUtE iS wOkInG..!!" });
});


mentoreManageRoute.get("/getMentoreById/:id", getMentoreByIDController);
mentoreManageRoute.get("/getAllMentore", getAllMentoreController);
mentoreManageRoute.post("/addMentoreUser",addMentoreUserController)
mentoreManageRoute.get("/getmentoreUserByID/:id",getmentoreUserByIDController)

export { mentoreManageRoute };
