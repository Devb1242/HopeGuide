import { model, Schema } from "mongoose";

const psychologistSchema = new Schema(
  {
    name: {
      type: String,
      trim: true,
    },
    email: {
      type: String,
      trim: true,
    },
    description:{
        type: String,
        trim:true
    },
    type:{
        type: String,
        trim:true,
    },
    address:{
        type:String,
        trim:true,
    },
    postalCode:{
        type:String,
        trim:true
    },
    city:{
        type:String,
        trim:true
    },
    mobile: {
      type: Number,
      trim: true,
    },
  },
  { timestamps: true }
);


export const psychologistModel = model("psychologist", psychologistSchema);
