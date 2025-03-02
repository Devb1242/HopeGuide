import { response } from "../../middleware/index.js";
import { getUserServiceByID, getAllUserService } from "../../service/mentore/index.js";



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