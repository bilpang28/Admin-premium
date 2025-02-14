import { Injectable } from "@angular/core";

export interface BadgeItem {
  type: string;
  value: string;
}

export interface ChildrenItems {
  state: string;
  name: string;
  type?: string;
}

export interface Menu {
  state: string;
  name: string;
  type: string;
  icon: string;
  badge?: BadgeItem[];
  children?: ChildrenItems[];
}

const MENUITEMS = [
  {
    state: "/",
    name: "HOME",
    type: "link",
    icon: "basic-accelerator"
  },
  {
    state: "authentication",
    name: "AUTHENTICATION",
    type: "sub",
    icon: "basic-lock-open",
    children: [
      {
        state: "signin",
        name: "SIGNIN"
      },
      {
        state: "signup",
        name: "SIGNUP"
      },
      {
        state: "forgot",
        name: "FORGOT"
      },
      {
        state: "lockscreen",
        name: "LOCKSCREEN"
      }
    ]
  },
  {
    state: "error",
    name: "ERROR",
    type: "sub",
    icon: "basic-ban",
    children: [
      {
        state: "404",
        name: "404"
      },
      {
        state: "500",
        name: "500"
      },
      {
        state: "503",
        name: "503"
      }
    ]
  },
  {
    state: "docs",
    name: "DOCS",
    type: "link",
    icon: "basic-sheet-txt"
  }
];

@Injectable()
export class MenuService {
  getAll(): Menu[] {
    return MENUITEMS;
  }
}
