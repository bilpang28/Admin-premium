import { CommonModule } from "@angular/common";
import { LandingComponent } from "./landing.component";
import { LandingRoutes } from "./landing.routing";
import { NgModule } from "@angular/core";
import { NgbCarouselModule } from "@ng-bootstrap/ng-bootstrap";
import { RouterModule } from "@angular/router";

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(LandingRoutes),
    NgbCarouselModule
  ],
  declarations: [LandingComponent]
})
export class LandingModule {}
