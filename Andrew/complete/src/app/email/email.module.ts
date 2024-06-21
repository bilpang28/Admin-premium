import { CommonModule } from "@angular/common";
import { EmailComponent } from "./email.component";
import { EmailRoutes } from "./email.routing";
import { NgModule } from "@angular/core";
import { RouterModule } from "@angular/router";
import { SidebarModule } from "ng-sidebar";

@NgModule({
  imports: [CommonModule, RouterModule.forChild(EmailRoutes), SidebarModule],
  declarations: [EmailComponent]
})
export class EmailModule {}
