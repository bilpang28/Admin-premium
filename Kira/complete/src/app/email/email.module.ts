import { CommonModule } from "@angular/common";
import { EmailComponent } from "./email.component";
import { EmailRoutes } from "./email.routing";
import { MatSidenavModule } from "@angular/material/sidenav";
import { NgModule } from "@angular/core";
import { NgbTooltipModule } from "@ng-bootstrap/ng-bootstrap";
import { RouterModule } from "@angular/router";

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(EmailRoutes),
    NgbTooltipModule,
    MatSidenavModule
  ],
  declarations: [EmailComponent]
})
export class EmailModule {}
