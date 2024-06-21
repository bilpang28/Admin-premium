import { BarComponent } from "./bar/bar.component";
import { LineComponent } from "./line/line.component";
import { MiscComponent } from "./misc/misc.component";
import { PieComponent } from "./pie/pie.component";
import { Routes } from "@angular/router";

export const ChartsRoutes: Routes = [
  {
    path: "",
    children: [
      {
        path: "bar",
        component: BarComponent,
        data: {
          heading: "Bar"
        }
      },
      {
        path: "pie",
        component: PieComponent,
        data: {
          heading: "Pie"
        }
      },
      {
        path: "line",
        component: LineComponent,
        data: {
          heading: "Line"
        }
      },
      {
        path: "misc",
        component: MiscComponent,
        data: {
          heading: "Misc"
        }
      }
    ]
  }
];
