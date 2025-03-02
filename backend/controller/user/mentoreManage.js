import { response } from "../../middleware/index.js";
import { getMentoreServiceByID, getAllMentoreService ,addMentoreUserService, getmentoreUserServiceByID} from "../../service/user/index.js";


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

export async function getmentoreUserByIDController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await getmentoreUserServiceByID(req.params.id);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.data, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        response(err.message, err?.err, err.status, res);
    }
}

export async function addMentoreUserController(req, res){
    // console.log("Inside Controller ");
    try {
       const resp =  await addMentoreUserService(req.body);
       console.log(resp);
       if (resp) return response("SUCCESS..!!", resp.data, 200, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        // console.log(err.message);
        response(err.message, err?.err, err.status, res);
    }
}