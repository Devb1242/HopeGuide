import { Router } from "express";
import {
  addLoyearController,
  getLoyearByIDController,
  getAllLoyearController,
  updateLoyearController,
  deleteLoyearController,
} from "../../controller/admin/index.js";
const loyearRoute = Router();



loyearRoute.get("/", (req, res) => {
  res.status(200).json({ message: "aDmIn Loyear RoUtE iS wOkInG..!!" });
});

loyearRoute.post("/addLoyear", addLoyearController);
loyearRoute.get("/getLoyearById/:id", getLoyearByIDController);
loyearRoute.get("/getAllLoyear", getAllLoyearController);
loyearRoute.put("/updateLoyear/:id", updateLoyearController);
loyearRoute.delete("/deleteLoyear/:id", deleteLoyearController);

export { loyearRoute };
