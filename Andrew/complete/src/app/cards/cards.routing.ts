import { BasicComponent } from "./basic/basic.component";
import { DraggableComponent } from "./draggable/draggable.component";
import { PortletsComponent } from "./portlets/portlets.component";
import { Routes } from "@angular/router";

export const CardsRoutes: Routes = [
  {
    path: "",
    children: [
      {
        path: "basic",
        component: BasicComponent,
        data: {
          heading: "Basic card"
        }
      },
      {
        path: "portlets",
        component: PortletsComponent,
        data: {
          heading: "Portlets"
        }
      },
      {
        path: "draggable",
        component: DraggableComponent,
        data: {
          heading: "Draggable"
        }
      }
    ]
  }
];
