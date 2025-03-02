import { model, Schema } from "mongoose";

const mentoreUserChatIdSchema = new Schema(
  {
    mentoreID: {
      type: String,
      trim: true,
    },
    userID: [{
      type: String,
      trim: true,
    }],
  },
  { timestamps: true }
);

export const mentoreUserChatIdModel = model("mentoreUserChatId", mentoreUserChatIdSchema);
