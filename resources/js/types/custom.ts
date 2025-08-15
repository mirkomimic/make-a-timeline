import { User } from ".";

export type TimelineType = {
  id: number;
  user?: User;
  title: string;
  description: string;
  alignment: "horizontal" | "vertical";
  visibility: "public" | "private";
  createdAt?: string;
  updatedAt?: string;
  items: TimelineItem[];
};

export type TimelineItem = {
  start: string;
  end: string;
};
