import { Router } from "express";
import {
  addMentoreController,
  getMentoreByIDController,
  getAllMentoreController,
  updateMentoreController,
  deleteMentoreController,
} from "../../controller/admin/index.js";
const mentoreManageRoute = Router();

mentoreManageRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn Mentore RoUtE iS wOkInG..!!" });
});

mentoreManageRoute.post("/addMentore", addMentoreController);
mentoreManageRoute.get("/getMentoreById/:id", getMentoreByIDController);
mentoreManageRoute.get("/getAllMentore", getAllMentoreController);
mentoreManageRoute.put("/updateMentore/:id", updateMentoreController);
mentoreManageRoute.delete("/deleteMentore/:id", deleteMentoreController);

export { mentoreManageRoute };
