import { loyearModel } from "../../model/index.js";
import { save, getAll, getById } from "../../helper/index.js";

export async function addLoyearService(data) {
  return new Promise(async (res, rej) => {
    try {
      if (data.mobile) {
          let loyearData = await loyearModel.findOne({mobile: data.mobile});
          if(loyearData){
            rej({ status: 400, message: "Mobile Number Already registerd" });
          }else{
                data.fullName = data.firstName + "" + data.lastName;
                let saveData = await save(data, loyearModel);
                // console.log(saveData)
                if (saveData) res({status:200, message:"Data Savaed", data:saveData});
                else rej({ status: 500, message: "Something Went Worng!!" });
          }
      } else {
        res({
          status: 400,
          message: "For register loyear need mobile Number..!!",
        });
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function getLoyearServiceByID(id){
  return new Promise(async (res,rej)=>{
    try {
      let loyearData = await loyearModel.findById(id);
      if(loyearData){
        res({status:200, message:"Data Found", data:loyearData});
      }else{
        rej({ status: 404, message: "Loyear not found !!"});
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function getAllLoyearService(){
  return new Promise(async (res,rej)=>{
    try {
      let loyearData = await loyearModel.find({}, { __v: 0, updatedAt: 0 });
      console.log(loyearData)
      if(loyearData.length > 0){
        res({status:200, message:"Data Found", data:loyearData});
      }else{
        rej({ status: 404, message: "Loyear Not Found !!"});
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function updateLoyearService(id, data){
  return new Promise(async (res,rej)=>{
    try {
      let dataExists = await loyearModel.findOne({ _id: id });
      if(!dataExists){
        rej({
          status: 404,
          message: "Loyear doesn't exist!!"});
      }else{
        let updatedData = await loyearModel.findByIdAndUpdate(id,data, {
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

export async function deleteLoyearService(id){
  return new Promise(async (res,rej)=>{
    try {
      let dataExists = await loyearModel.findOne({ _id: id });
      if(!dataExists){
        rej({
          status: 404,
          message: "Loyear doesn't exist!!"});
      }else{
        let deletedData = await loyearModel.findByIdAndDelete(id);
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
