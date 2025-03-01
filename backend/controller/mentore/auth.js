import { response } from "../../middleware/index.js";
import { addAuthService, loginService } from "../../service/mentore/index.js";

export async function addAuthController(req, res){
    try {
        const resp = await addAuthService(req.body);
        if (resp) return response("SUCCESS..!!", resp.data, resp.status, res);
        else return response("Something went wrong!!", {}, 500, res);
    } catch (err) {
        return response(err.message, err?.error, err.status, res);
    }
}

export async function loginController(req, res){
    try {
        const resp = await loginService(req.body);
        res.cookie("JwtToken", resp.data.token, {
            httpOnly: true,
            sameSite: "strict",
            maxAge: 60 * 60 * 1000
        });
        // console.log("Cookies => "+ JSON.stringify(req.cookies.JwtToken));
        if (resp) return response("SUCCESS..!!", resp.data, resp.status, res);
        else return response("Somthing Went Wrong!!", {}, 500, res);
    } catch (err) {
        return response(err.message, err?.error, err.status, res)
    }
}

export async function logoutController(req, res){
    try {
        res.clearCookie("JwtToken");
        return response("Logout Succesfully..!!", {}, 200, res);
    } catch (err) {
        return response(err.message, err?.error, err.status, res)
    }
}