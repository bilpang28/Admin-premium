import { CommonModule } from "@angular/common";
import { GridComponent } from "./grid/grid.component";
import { ListComponent } from "./list/list.component";
import { MediaRoutes } from "./media.routing";
import { NgModule } from "@angular/core";
import { NgbTooltipModule } from "@ng-bootstrap/ng-bootstrap";
import { RouterModule } from "@angular/router";
import { TileComponent } from "./tile/tile.component";

@NgModule({
  imports: [CommonModule, RouterModule.forChild(MediaRoutes), NgbTooltipModule],
  declarations: [GridComponent, TileComponent, ListComponent]
})
export class MediaModule {}
