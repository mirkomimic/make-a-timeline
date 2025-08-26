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
  id: number;
  start: string;
  end: string;
  sort_order_num: number;
};

export type PaginatedData<T> = {
  current_page: number;
  data: T[];
  first_page_url: string;
  from: number;
  last_page: number;
  last_page_url: string;
  links: { url: string | null; label: string; active: boolean }[];
  next_page_url: string | null;
  path: string;
  per_page: number;
  prev_page_url: string | null;
  to: number;
  total: number;
};

export type PaginationData = Omit<PaginatedData<any>, "data">;
