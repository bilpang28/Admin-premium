import { AdminLayoutComponent } from "./core";
import { AuthLayoutComponent } from "./core";
import { Routes } from "@angular/router";

export const AppRoutes: Routes = [
  {
    path: "",
    component: AdminLayoutComponent,
    children: [
      {
        path: "",
        loadChildren: () =>
          import("./dashboard/dashboard.module").then(m => m.DashboardModule)
      },
      {
        path: "docs",
        loadChildren: () => import("./docs/docs.module").then(m => m.DocsModule)
      }
    ]
  },
  {
    path: "",
    component: AuthLayoutComponent,
    children: [
      {
        path: "authentication",
        loadChildren: () =>
          import("./authentication/authentication.module").then(
            m => m.AuthenticationModule
          )
      },
      {
        path: "error",
        loadChildren: () =>
          import("./error/error.module").then(m => m.ErrorModule)
      }
    ]
  },
  {
    path: "**",
    redirectTo: "error/404"
  }
];
