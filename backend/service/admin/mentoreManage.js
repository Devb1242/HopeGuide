import { mentoreModel } from "../../model/index.js";
import { save, getAll, getById } from "../../helper/index.js";

export async function addMentoreService(data) {
  return new Promise(async (res, rej) => {
    try {
      if (data.mobile) {
          let mentoreData = await mentoreModel.findOne({mobile: data.mobile});
          if(mentoreData){
            rej({ status: 400, message: "Mobile Number Already registerd" });
          }else{
                data.fullName = data.firstName + "" + data.lastName;
                let saveData = await save(data, mentoreModel);
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

export async function getMentoreServiceByID(id){
  return new Promise(async (res,rej)=>{
    try {
      let mentoreData = await mentoreModel.findById(id);
      if(mentoreData){
        res({status:200, message:"Data Found", data:mentoreData});
      }else{
        rej({ status: 404, message: "User not found !!"});
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function getAllMentoreService(){
  return new Promise(async (res,rej)=>{
    try {
      let mentoreData = await mentoreModel.find({}, { __v: 0, updatedAt: 0 });
      console.log(mentoreData)
      if(mentoreData.length > 0){
        res({status:200, message:"Data Found", data:mentoreData});
      }else{
        rej({ status: 404, message: "User Not Found !!"});
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function updateMentoreService(id, data){
  return new Promise(async (res,rej)=>{
    try {
      let dataExists = await mentoreModel.findOne({ _id: id });
      if(!dataExists){
        rej({
          status: 404,
          message: "User doesn't exist!!"});
      }else{
        let updatedData = await mentoreModel.findByIdAndUpdate(id,data, {
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

export async function deleteMentoreService(id){
  return new Promise(async (res,rej)=>{
    try {
      let dataExists = await mentoreModel.findOne({ _id: id });
      if(!dataExists){
        rej({
          status: 404,
          message: "User doesn't exist!!"});
      }else{
        let deletedData = await mentoreModel.findByIdAndDelete(id);
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
