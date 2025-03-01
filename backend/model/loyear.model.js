import { model, Schema } from "mongoose";
const loyearSchema = new Schema(
  {
    name: {
      type: String,
      trim: true,
    },
    mobile: {
      type: Number,
      trim: true,
    },
    desctiprion: {
      type: String,
      trim: true,
    },
    address: {
      type: String,
      trim: true,
    },
    city: {
      type: String,
      trim: true,
    },
    postalCode: {
      type: String,
      trim: true,
    },
    ratings: {
      type: Number,
      trim: true,
    },
  },
  { timestamps: true }
);

export const loyearModel = model("loyear", loyearSchema);
