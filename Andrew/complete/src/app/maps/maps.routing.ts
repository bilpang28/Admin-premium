import { FullscreenComponent } from "./fullscreen/fullscreen.component";
import { GoogleComponent } from "./google/google.component";
import { Routes } from "@angular/router";

export const MapsRoutes: Routes = [
  {
    path: "",
    children: [
      {
        path: "google",
        component: GoogleComponent,
        data: {
          heading: "Google Maps"
        }
      },
      {
        path: "fullscreen",
        component: FullscreenComponent,
        data: {
          heading: "Full Page Map",
          removeFooter: true,
          mapHeader: true
        }
      }
    ]
  }
];
