import { Router } from "express";
import {
  getLoyearByIDController,
  getAllLoyearController,
} from "../../controller/user/index.js";
const loyearRoute = Router();

loyearRoute.get("/", (req, res) => {
  res.status(200).json({ message: "user Loyear RoUtE iS wOkInG..!!" });
});

loyearRoute.get("/getLoyearById/:id", getLoyearByIDController);
loyearRoute.get("/getAllLoyear", getAllLoyearController);

export { loyearRoute };
