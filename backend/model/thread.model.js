import { model, Schema } from "mongoose";
const threadSchema = new Schema(
  {
    title: {
      type: String,
      trim: true,
    },
    description: {
      type: String,
      trim: true,
    },
    userId: {
      type: Schema.ObjectId,
      trim: true,
    },
    replay: [
      {
        message: {
          type: String,
          trim: true,
        },
        userId: {
          type: Schema.ObjectId,
          trim: true,
        },
      },
    ],
  },
  { timestamps: true }
);

export const threadModel = model("thread", threadSchema);
