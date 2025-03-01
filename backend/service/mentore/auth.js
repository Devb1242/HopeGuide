import config from "../../config/config.js";
import { encrypt,save } from "../../helper/index.js";
import { mentoreModel } from "../../model/index.js";
import jwt from "jsonwebtoken";
import bcryptJs from "bcryptjs";

export async function addAuthService(data) {
  return new Promise(async (res, rej) => {
    try {
      if (data.email || data.mobile) {
        if (data.password) {
            const userData = await mentoreModel.findOne({email: data.email});
            if(userData){
                rej({ status: 400, message: "email Already registerd" });
            }else{
                data.fullName = data.firstName + "" + data.lastName;
                const saveData = await save(data, mentoreModel);
                if (saveData) res(saveData); 
                else rej({ status: 500, message: "Something Went Worng!!" });
            }
        } else {
          rej({ status: 400, message: "Password Is Require!!" });
        }
      } else {
        rej({
          status: 400,
          message: "Email or mobileNumber Is Require!!",
        });
      }
    } catch (err) {
      console.log("err ...", err);
      rej({
        status: 500,
        error: err,
        message: err?.message || "Something Went Wrong!!!",
      });
    }
  });
}

export async function loginService(data) {
  return new Promise(async (res, rej) => {
    try {
      if (data.email && data.password) {
        let loginData = await mentoreModel.findOne({ email: data.email });
        if (loginData) {
          const isMatch = bcryptJs.compare(data.password, loginData.password);
          if (isMatch) {
            let key1 = config.MENTORE_ENCRYPTION_KEY;
            let encryptMentore = await encrypt(loginData._id, key1);
            let encryptPass = await encrypt(loginData.password, key1);
            let token = jwt.sign(
              {
                mentoreId: encryptMentore,
                password: encryptPass,
              },
              config.MENTORE_ACCESS_TOKEN,
              {
                expiresIn: config.MENTORE_ACCESS_TIME,
              }
            );
            let data = {
              token: token,
              first_name: loginData.firstName,
              last_name: loginData.lastName,
            };
            res({ status: 200, message:"SUCESS.!!" ,data: data });
          } else {
            rej({ status: 400, message: "Wrong Email And Password" });
          }
      } else {
        rej({ status: 400, message: "Email Not Registered Register First" });
      }
    }else{
        rej({status:404, message:"Email and password required for registration.!"})
    }
    } catch (err) {
      console.log("err ...", err);
      rej({
        status: 500,
        error: err,
        message: err?.message || "Something Went Wrong!!!",
      });
    }
  });
}

