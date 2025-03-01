import { response } from "../../middleware/index.js";
import { addLoyearService, getLoyearServiceByID, getAllLoyearService, updateLoyearService, deleteLoyearService } from "../../service/admin/index.js";

export async function addLoyearController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await addLoyearService(req.body);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        response(err.message, err?.err, err.status, res);
    }
}

export async function getLoyearByIDController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await getLoyearServiceByID(req.params.id);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.data, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        response(err.message, err?.err, err.status, res);
    }
}

export async function getAllLoyearController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await getAllLoyearService();
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.data, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        // console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}

export async function updateLoyearController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await updateLoyearService(req.params.id, req.body);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}

export async function deleteLoyearController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await deleteLoyearService(req.params.id);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.message, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}