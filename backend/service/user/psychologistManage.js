import { psychologistModel } from "../../model/index.js";
import { getAll } from "../../helper/index.js";

export async function getPsychologistServiceByID(id) {
  return new Promise(async (res, rej) => {
    try {
      let psychologistData = await psychologistModel.findById(id);
      if (psychologistData) {
        res({ status: 200, message: "Data Found", data: psychologistData });
      } else {
        rej({ status: 404, message: "psychologist not found !!" });
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function getAllPsychologistService(str, page, limit) {
  return new Promise(async (res, rej) => {
    try {
      // let psychologistData = await psychologistModel.find(
      //   {},
      //   { __v: 0, updatedAt: 0 }
      // );
      if (page && limit) {
        let psychologistData = await getAll({}, 1, 10, psychologistModel);
        if (psychologistData.status == 200) {
          res({
            status: psychologistData.status,
            message: psychologistData.message,
            data: psychologistData.data,
          });
        } else {
          rej({ status: 404, message: "psychologist Not Found !!" });
        }
      }else
      rej({ status: 404, message: "Page and limit required !!" });
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}
