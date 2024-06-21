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
        path: "email",
        loadChildren: () =>
          import("./email/email.module").then(m => m.EmailModule)
      },
      {
        path: "components",
        loadChildren: () =>
          import("./components/components.module").then(m => m.ComponentsModule)
      },
      {
        path: "icons",
        loadChildren: () =>
          import("./icons/icons.module").then(m => m.IconsModule)
      },
      {
        path: "cards",
        loadChildren: () =>
          import("./cards/cards.module").then(m => m.CardsModule)
      },
      {
        path: "forms",
        loadChildren: () => import("./form/form.module").then(m => m.FormModule)
      },
      {
        path: "tables",
        loadChildren: () =>
          import("./tables/tables.module").then(m => m.TablesModule)
      },
      {
        path: "datatable",
        loadChildren: () =>
          import("./datatable/datatable.module").then(m => m.DatatableModule)
      },
      {
        path: "charts",
        loadChildren: () =>
          import("./charts/charts.module").then(m => m.ChartsModule)
      },
      {
        path: "maps",
        loadChildren: () => import("./maps/maps.module").then(m => m.MapsModule)
      },
      {
        path: "pages",
        loadChildren: () =>
          import("./pages/pages.module").then(m => m.PagesModule)
      },
      {
        path: "taskboard",
        loadChildren: () =>
          import("./taskboard/taskboard.module").then(m => m.TaskboardModule)
      },
      {
        path: "calendar",
        loadChildren: () =>
          import("./fullcalendar/fullcalendar.module").then(
            m => m.FullcalendarModule
          )
      },
      {
        path: "media",
        loadChildren: () =>
          import("./media/media.module").then(m => m.MediaModule)
      },
      {
        path: "widgets",
        loadChildren: () =>
          import("./widgets/widgets.module").then(m => m.WidgetsModule)
      },
      {
        path: "social",
        loadChildren: () =>
          import("./social/social.module").then(m => m.SocialModule)
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
      },
      {
        path: "landing",
        loadChildren: () =>
          import("./landing/landing.module").then(m => m.LandingModule)
      }
    ]
  },
  {
    path: "**",
    redirectTo: "error/404"
  }
];
