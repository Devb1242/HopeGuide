import { response } from "../../middleware/index.js";
import { addMentoreService, getMentoreServiceByID, getAllMentoreService, updateMentoreService, deleteMentoreService } from "../../service/admin/index.js";

export async function addMentoreController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await addMentoreService(req.body);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        response(err.message, err?.err, err.status, res);
    }
}

export async function getMentoreByIDController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await getMentoreServiceByID(req.params.id);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.data, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        response(err.message, err?.err, err.status, res);
    }
}

export async function getAllMentoreController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await getAllMentoreService();
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.data, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        // console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}

export async function updateMentoreController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await updateMentoreService(req.params.id, req.body);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}

export async function deleteMentoreController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await deleteMentoreService(req.params.id);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}