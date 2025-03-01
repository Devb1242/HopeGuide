import { loyearModel } from "../../model/index.js";
import {  getAll } from "../../helper/index.js";

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

export async function getAllLoyearService(str, page, limit){
  return new Promise(async (res,rej)=>{
    try {
      if (page && limit) {
        let loyearData = await getAll({}, 1, 10, loyearModel);
        if (loyearData.status == 200) {
          res({
            status: loyearData.status,
            message: loyearData.message,
            data: loyearData.data,
          });
        } else {
          rej({ status: 404, message: "loyear Not Found !!" });
        }
      }else
      rej({ status: 404, message: "Page and limit required !!" });
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}