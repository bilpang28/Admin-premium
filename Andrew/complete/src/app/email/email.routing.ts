import { EmailComponent } from "./email.component";
import { Routes } from "@angular/router";

export const EmailRoutes: Routes = [
  {
    path: "",
    component: EmailComponent,
    data: {
      heading: "Email",
      removeFooter: true
    }
  }
];
