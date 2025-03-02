import { save } from "../../helper/commonModelService.js";
import { mentoreModel, mentoreUserChatIdModel } from "../../model/index.js";
// import { save, getAll, getById } from "../../helper/index.js";



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

export async function addMentoreUserService(data){
  return new Promise(async (res,rej)=>{
    try {
      let mentoreData = await mentoreUserChatIdModel.findOne({mentoreID:data.mentoreID});
      if(mentoreData){
        await mentoreUserChatIdModel.update({mentoreID:data.mentoreID}, { $push: { userId: data.userId } })
        res({status:200, message:"Data Saved"});
      }else{
        let mentoreNewData = await save(data,mentoreUserChatIdModel);
        if(mentoreNewData){
          console.log("Data Saved")
          res({status:200, message:"Data Saved"});
        }else{console.log("Data Not Saved")}
      }
    } catch (err) {
      console.log("pavan error", err)
      rej({ status: 500, error: err.message });
    }
  });
}

export async function getmentoreUserServiceByID(id){
  return new Promise(async (res,rej)=>{
    try {
      let mentoreUserData = await mentoreUserChatIdModel.findOne({mentoreID:id});
      if(mentoreUserData){
        res({status:200, message:"Data Found", data:mentoreUserData});
      }else{
        rej({ status: 404, message: "User not found !!"});
      }
    } catch (err) {
      console.log(err)
      rej({ status: 500, error: err.message });
    }
  });
}
