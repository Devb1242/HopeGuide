import { Router } from "express";
import {
  addThreadController,
  getByIDThreadController,
  getAllThreadController,
  updateThreadController,
  deleteThreadController,
  addThreadReplayController,
} from "../../controller/user/index.js";
const communityRoute = Router();

communityRoute.get("/", (req, res) => {
  res.status(200).json({ message: "User Community RoUtE iS wOkInG..!!" });
});

communityRoute.post("/addThread", addThreadController);
communityRoute.get("/getByIdThread/:id", getByIDThreadController);
communityRoute.get("/getAllThread", getAllThreadController);
communityRoute.put("/updateThread/:id", updateThreadController);
communityRoute.delete("/deleteThread/:id", deleteThreadController);
communityRoute.post("/addThreadReplay/:id", addThreadReplayController)

export { communityRoute };
