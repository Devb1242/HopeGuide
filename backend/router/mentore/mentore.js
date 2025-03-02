import { Router } from "express";
import {
  getMentoreByIDController,
  getAllMentoreController,
} from "../../controller/admin/index.js";
const mentoreManageRoute = Router();

mentoreManageRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn Mentore RoUtE iS wOkInG..!!" });
});

mentoreManageRoute.get("/getMentoreById/:id", getMentoreByIDController);
mentoreManageRoute.get("/getAllMentore", getAllMentoreController);

export { mentoreManageRoute };
