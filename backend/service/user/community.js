import { threadModel } from "../../model/index.js";
import { save, getAll, getById } from "../../helper/index.js";

export async function addThreadService(data) {
  return new Promise(async (res, rej) => {
    try {
      console.log(data);
      if (data.title) {
        let saveData = await save(data, threadModel);
        if (saveData)
          res({ status: 200, message: "Data Savaed", data: saveData });
        else rej({ status: 500, message: "Something Went Worng!!" });
      } else {
        res({
          status: 400,
          message: "For register Thread need title Number..!!",
        });
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function getByIDThreadService(id) {
  return new Promise(async (res, rej) => {
    try {
      let threadData = await threadModel.findById(id);
      if (threadData) {
        res({ status: 200, message: "Data Found", data: threadData });
      } else {
        rej({ status: 404, message: "Thread not found !!" });
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function getAllThreadService(str, page, limit) {
  return new Promise(async (res, rej) => {
    try {
      if (page && limit) {
        let threadData = await getAll({}, 1, 10, threadModel);
        if (threadData.status == 200) {
          res({
            status: threadData.status,
            message: threadData.message,
            data: threadData.data,
          });
        } else {
          rej({ status: 404, message: "thread Not Found !!" });
        }
      }
      rej({ status: 404, message: "Page and limit required !!" });
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function updateThreadService(id, data) {
  return new Promise(async (res, rej) => {
    try {
      if (!data.replay) {
        let dataExists = await threadModel.findOne({ _id: id });
        if (!dataExists) {
          rej({
            status: 404,
            message: "Thread doesn't exist!!",
          });
        } else {
          let updatedData = await threadModel.findByIdAndUpdate(id, data, {
            new: true,
          });
          if (updatedData) {
            res({ status: 200, message: "Data Updated", data: updatedData });
          } else {
            rej({ status: 500, message: "Something went wrong!!" });
          }
        }
      } else {
        rej({ status: 400, message: "Can not update thread replay!!" });
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}

export async function deleteThreadService(id) {
  return new Promise(async (res, rej) => {
    try {
      let dataExists = await threadModel.findOne({ _id: id });
      if (!dataExists) {
        rej({
          status: 404,
          message: "Thread doesn't exist!!",
        });
      } else {
        let deletedData = await threadModel.findByIdAndDelete(id);
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

export async function addThreadReplayService(threadId, data) {
  return new Promise(async (res, rej) => {
    try {
      console.log(data);
      if (threadId) {
        // let saveData = await save(data, threadModel);
        let saveData = await threadModel.updateOne({ _id: threadId }, { $push: { replay: data } });
        if (saveData){
        console.log(saveData)
          res({ status: 200, message: "Replay Savaed", data: saveData });
        }
        else rej({ status: 500, message: "Something Went Worng!!" });
      } else {
        res({
          status: 400,
          message: "For add replay need threadId..!!",
        });
      }
    } catch (err) {
      rej({ status: 500, error: err.message });
    }
  });
}