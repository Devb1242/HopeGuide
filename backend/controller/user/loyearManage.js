import { response } from "../../middleware/index.js";
import {
  getLoyearServiceByID,
  getAllLoyearService,
} from "../../service/user/index.js";

export async function getLoyearByIDController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await getLoyearServiceByID(req.params.id);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.data, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    response(err.message, err?.err, err.status, res);
  }
}

export async function getAllLoyearController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await getAllLoyearService(req.query.str, req.query.page, req.query.limit);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.data, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    // console.log(err.message);
    response(err.message, err?.err, err.status, res);
  }
}