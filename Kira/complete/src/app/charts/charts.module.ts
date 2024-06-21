import { BarComponent } from "./bar/bar.component";
import { ChartsRoutes } from "./charts.routing";
import { CommonModule } from "@angular/common";
import { LineComponent } from "./line/line.component";
import { MiscComponent } from "./misc/misc.component";
import { NgModule } from "@angular/core";
import { NgxChartsModule } from "@swimlane/ngx-charts";
import { PieComponent } from "./pie/pie.component";
import { RouterModule } from "@angular/router";

@NgModule({
  imports: [CommonModule, RouterModule.forChild(ChartsRoutes), NgxChartsModule],
  declarations: [BarComponent, PieComponent, LineComponent, MiscComponent]
})
export class ChartsModule {}
