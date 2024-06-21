import { BasicComponent } from "./basic/basic.component";
import { CardsRoutes } from "./cards.routing";
import { CommonModule } from "@angular/common";
import { DraggableComponent } from "./draggable/draggable.component";
import { DragulaModule } from "ng2-dragula";
import { NgModule } from "@angular/core";
import { NgbCollapseModule } from "@ng-bootstrap/ng-bootstrap";
import { RouterModule } from "@angular/router";

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(CardsRoutes),
    DragulaModule.forRoot(),
    NgbCollapseModule
  ],
  declarations: [BasicComponent, DraggableComponent]
})
export class CardsModule {}
