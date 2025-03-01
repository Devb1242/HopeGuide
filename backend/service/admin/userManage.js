import { userModel } from "../../model/index.js";
import { save, getAll, getById } from "../../helper/index.js";

export async function addUserService(data) {
  return new Promise(async (res, rej) => {
    try {
      if (data.mobile) {
          let userData = await userModel.findOne({mobile: data.mobile});
          if(userData){
            rej({ status: 400, message: "Mobile Number Already registerd" });
          }else{
                data.fullName = data.firstName + "" + data.lastName;
                let saveData = await save(data, userModel);
                // console.log(saveData)
                if (saveData) res({status:200, message:"Data Savaed", data:saveData});
                else rej({ status: 500, message: "Something Went Worng!!" });
          }
      } else {
        res({
          status: 400,
          message: "For register User need mobile Number..!!",
        });
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

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

export async function updateUserService(id, data){
  return new Promise(async (res,rej)=>{
    try {
      let dataExists = await userModel.findOne({ _id: id });
      if(!dataExists){
        rej({
          status: 404,
          message: "User doesn't exist!!"});
      }else{
        let updatedData = await userModel.findByIdAndUpdate(id,data, {
          new: true,
        });
        if(updatedData){
          res({status:200, message:"Data Updated", data:updatedData});
        }else{
          rej({ status: 500, message: "Something went wrong!!"});
        }
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function deleteUserService(id){
  return new Promise(async (res,rej)=>{
    try {
      let dataExists = await userModel.findOne({ _id: id });
      if(!dataExists){
        rej({
          status: 404,
          message: "User doesn't exist!!"});
      }else{
        let deletedData = await userModel.findByIdAndDelete(id);
        if(deletedData){
          res({status:200, message:"Data Deleted", data:deletedData});
        }else{
          rej({ status: 500, message: "Something went wrong!!"});
        }
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}
