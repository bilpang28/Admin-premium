import { AgmCoreModule } from "@agm/core";
import { CommonModule } from "@angular/common";
import { FullscreenComponent } from "./fullscreen/fullscreen.component";
import { GoogleComponent } from "./google/google.component";
import { MapsRoutes } from "./maps.routing";
import { NgModule } from "@angular/core";
import { RouterModule } from "@angular/router";

@NgModule({
  imports: [CommonModule, RouterModule.forChild(MapsRoutes), AgmCoreModule],
  declarations: [GoogleComponent, FullscreenComponent]
})
export class MapsModule {}
