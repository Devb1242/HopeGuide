import { mentoreModel } from "../../model/index.js";
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

