import { response } from "../../middleware/index.js";
import {
  addPsychologistService,
  getPsychologistServiceByID,
  getAllPsychologistService,
  updatePsychologistService,
  deletePsychologistService,
} from "../../service/admin/index.js";

export async function addPsychologistController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await addPsychologistService(req.body);
    if (resp) return response("SUCCESS..!!", resp.message, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    response(err.message, err?.err, err.status, res);
  }
}

export async function getPsychologistByIDController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await getPsychologistServiceByID(req.params.id);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.data, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    response(err.message, err?.err, err.status, res);
  }
}

export async function getAllPsychologistController(req, res) {
  // console.log("Inside Controller ");
  try {
    console.log(req.query.page);
    const resp = await getAllPsychologistService(
      req.query.str,
      req.query.page,
      req.query.limit
    );
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.data, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    // console.log(err.message);
    response(err.message, err?.err, err.status, res);
  }
}

export async function updatePsychologistController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await updatePsychologistService(req.params.id, req.body);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.message, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    console.log(err.message);
    response(err.message, err?.err, err.status, res);
  }
}

export async function deletePsychologistController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await deletePsychologistService(req.params.id);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.message, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    console.log(err.message);
    response(err.message, err?.err, err.status, res);
  }
}
