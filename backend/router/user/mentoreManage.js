import { Router } from "express";
import {
  getMentoreByIDController,
  getAllMentoreController,
} from "../../controller/user/index.js";
const mentoreManageRoute = Router();

mentoreManageRoute.get("/", (req, res) => {
  res.status(200).json({ message: "User Mentore RoUtE iS wOkInG..!!" });
});


mentoreManageRoute.get("/getMentoreById/:id", getMentoreByIDController);
mentoreManageRoute.get("/getAllMentore", getAllMentoreController);


export { mentoreManageRoute };
