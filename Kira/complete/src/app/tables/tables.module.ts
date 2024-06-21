import { BasicComponent } from "./basic/basic.component";
import { CommonModule } from "@angular/common";
import { NgModule } from "@angular/core";
import { ResponsiveComponent } from "./responsive/responsive.component";
import { RouterModule } from "@angular/router";
import { TablesRoutes } from "./tables.routing";

@NgModule({
  imports: [CommonModule, RouterModule.forChild(TablesRoutes)],
  declarations: [BasicComponent, ResponsiveComponent]
})
export class TablesModule {}
