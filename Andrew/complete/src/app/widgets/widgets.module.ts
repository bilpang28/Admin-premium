import { CommonModule } from "@angular/common";
import { NgModule } from "@angular/core";
import { RouterModule } from "@angular/router";
import { WidgetsComponent } from "./widgets.component";
import { WidgetsRoutes } from "./widgets.routing";

@NgModule({
  imports: [CommonModule, RouterModule.forChild(WidgetsRoutes)],
  declarations: [WidgetsComponent]
})
export class WidgetsModule {}
