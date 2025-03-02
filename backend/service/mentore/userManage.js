import { userModel } from "../../model/index.js";


export async function getUserServiceByID(id){
  return new Promise(async (res,rej)=>{
    try {
      let userData = await userModel.findById(id);
      if(userData){
        res({status:200, message:"Data Found", data:userData});
      }else{
        rej({ status: 404, message: "User not found !!"});
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function getAllUserService(){
  return new Promise(async (res,rej)=>{
    try {
      let userData = await userModel.find({}, { __v: 0, updatedAt: 0 });
      console.log(userData)
      if(userData.length > 0){
        res({status:200, message:"Data Found", data:userData});
      }else{
        rej({ status: 404, message: "User Not Found !!"});
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}
