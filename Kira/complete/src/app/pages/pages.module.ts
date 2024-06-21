import { ActivityComponent } from "./activity/activity.component";
import { BlankComponent } from "./blank/blank.component";
import { CommonModule } from "@angular/common";
import { ForumComponent } from "./forum/forum.component";
import { InvoiceComponent } from "./invoice/invoice.component";
import { NgModule } from "@angular/core";
import { NgxDatatableModule } from "@swimlane/ngx-datatable";
import { PagesRoutes } from "./pages.routing";
import { PricingComponent } from "./pricing/pricing.component";
import { RouterModule } from "@angular/router";
import { TimelineComponent } from "./timeline/timeline.component";

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(PagesRoutes),
    NgxDatatableModule
  ],
  declarations: [
    InvoiceComponent,
    TimelineComponent,
    PricingComponent,
    ForumComponent,
    ActivityComponent,
    BlankComponent
  ]
})
export class PagesModule {}
