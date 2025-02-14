import { CommonModule } from "@angular/common";
import { DashboardComponent } from "./dashboard.component";
import { DashboardRoutes } from "./dashboard.routing";
import { NgModule } from "@angular/core";
import { RouterModule } from "@angular/router";

@NgModule({
  imports: [CommonModule, RouterModule.forChild(DashboardRoutes)],
  declarations: [DashboardComponent]
})
export class DashboardModule {}
