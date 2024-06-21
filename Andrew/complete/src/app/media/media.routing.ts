import { GridComponent } from "./grid/grid.component";
import { ListComponent } from "./list/list.component";
import { Routes } from "@angular/router";
import { TileComponent } from "./tile/tile.component";

export const MediaRoutes: Routes = [
  {
    path: "",
    children: [
      {
        path: "grid",
        component: GridComponent,
        data: {
          heading: "Media Grid"
        }
      },
      {
        path: "tile",
        component: TileComponent,
        data: {
          heading: "Media Tiles"
        }
      },
      {
        path: "list",
        component: ListComponent,
        data: {
          heading: "Media Lists"
        }
      }
    ]
  }
];
