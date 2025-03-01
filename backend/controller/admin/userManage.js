import { response } from "../../middleware/index.js";
import { addUserService, getUserServiceByID, getAllUserService, updateUserService, deleteUserService } from "../../service/admin/index.js";

export async function addUserController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await addUserService(req.body);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        response(err.message, err?.err, err.status, res);
    }
}

export async function getUserByIDController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await getUserServiceByID(req.params.id);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.data, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        response(err.message, err?.err, err.status, res);
    }
}

export async function getAllUserController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await getAllUserService();
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.data, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        // console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}

export async function updateUserController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await updateUserService(req.params.id, req.body);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}

export async function deleteUserController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await deleteUserService(req.params.id);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}