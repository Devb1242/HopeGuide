import { Router } from "express";
import {
  addPsychologistController,
  getPsychologistByIDController,
  getAllPsychologistController,
  updatePsychologistController,
  deletePsychologistController,
} from "../../controller/admin/index.js";
const psychologistManageRoute = Router();

psychologistManageRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn Psychologist RoUtE iS wOkInG..!!" });
});

psychologistManageRoute.post("/addPsychologist", addPsychologistController);
psychologistManageRoute.get("/getPsychologistById/:id", getPsychologistByIDController);
psychologistManageRoute.get("/getAllPsychologist", getAllPsychologistController);
psychologistManageRoute.put("/updatePsychologist/:id", updatePsychologistController);
psychologistManageRoute.delete("/deletePsychologist/:id", deletePsychologistController);

export { psychologistManageRoute };
