import { response } from "../../middleware/index.js";
import {
  addThreadService,
  getByIDThreadService,
  getAllThreadService,
  updateThreadService,
  deleteThreadService,
  addThreadReplayService,
} from "../../service/user/index.js";

export async function addThreadController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await addThreadService(req.body);
    if (resp) return response("SUCCESS..!!", resp.message, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    response(err.message, err?.err, err.status, res);
  }
}

export async function getByIDThreadController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await getByIDThreadService(req.params.id);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.data, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    response(err.message, err?.err, err.status, res);
  }
}

export async function getAllThreadController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await getAllThreadService(
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

export async function updateThreadController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await updateThreadService(req.params.id, req.body);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.message, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    console.log(err.message);
    response(err.message, err?.err, err.status, res);
  }
}

export async function deleteThreadController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await deleteThreadService(req.params.id);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.message, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    console.log(err.message);
    response(err.message, err?.err, err.status, res);
  }
}

export async function addThreadReplayController(req, res) {
  // console.log("Inside Controller ");
  try {
    const resp = await addThreadReplayService(req.params.id, req.body);
    console.log(resp);
    if (resp) return response("SUCCESS..!!", resp.message, 200, res);
    else return response("Something went wrong!!", {}, 500, res);
  } catch (err) {
    console.log(err.message);
    response(err.message, err?.err, err.status, res);
  }
}