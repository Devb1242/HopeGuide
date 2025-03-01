import { psychologistModel } from "../../model/index.js";
import { save, getAll, getById } from "../../helper/index.js";

export async function addPsychologistService(data) {
  return new Promise(async (res, rej) => {
    try {
      if (data.mobile) {
        let psychologistData = await psychologistModel.findOne({
          mobile: data.mobile,
        });
        if (psychologistData) {
          rej({ status: 400, message: "Mobile Number Already registerd" });
        } else {
          data.fullName = data.firstName + "" + data.lastName;
          let saveData = await save(data, psychologistModel);
          // console.log(saveData)
          if (saveData)
            res({ status: 200, message: "Data Savaed", data: saveData });
          else rej({ status: 500, message: "Something Went Worng!!" });
        }
      } else {
        res({
          status: 400,
          message: "For register psychologist need mobile Number..!!",
        });
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

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
      if(page && limit){

      
      let psychologistData = await getAll({}, 1, 10, psychologistModel);
      if (psychologistData.status == 200) {
        res({ status: psychologistData.status, message: psychologistData.message, data: psychologistData.data });
      } else {
        rej({ status: 404, message: "psychologist Not Found !!" });
      }
    }rej({status: 404, message: "Page and limit required !!"})
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function updatePsychologistService(id, data) {
  return new Promise(async (res, rej) => {
    try {
      let dataExists = await psychologistModel.findOne({ _id: id });
      if (!dataExists) {
        rej({
          status: 404,
          message: "psychologist doesn't exist!!",
        });
      } else {
        let updatedData = await psychologistModel.findByIdAndUpdate(id, data, {
          new: true,
        });
        if (updatedData) {
          res({ status: 200, message: "Data Updated", data: updatedData });
        } else {
          rej({ status: 500, message: "Something went wrong!!" });
        }
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function deletePsychologistService(id) {
  return new Promise(async (res, rej) => {
    try {
      let dataExists = await psychologistModel.findOne({ _id: id });
      if (!dataExists) {
        rej({
          status: 404,
          message: "psychologist doesn't exist!!",
        });
      } else {
        let deletedData = await psychologistModel.findByIdAndDelete(id);
        if (deletedData) {
          res({ status: 200, message: "Data Deleted", data: deletedData });
        } else {
          rej({ status: 500, message: "Something went wrong!!" });
        }
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}
