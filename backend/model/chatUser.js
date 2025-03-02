import { model, Schema } from "mongoose";

const chatUserSchema = new Schema(
  {
    name: {
      type: String,
      trim: true,
    },
    message: {
      type: String,
      trim: true,
    },
    from:{
        type: String,
        trim:true
    },
    to:{
        type:String,
        trim:true
    }
  },
  { timestamps: true }
);

export const chatUserModel = model("chatUser", chatUserSchema);
