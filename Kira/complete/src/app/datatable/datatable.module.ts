import { CommonModule } from "@angular/common";
import { DataTableComponent } from "./data-table/data-table.component";
import { DatatableRoutes } from "./datatable.routing";
import { NgModule } from "@angular/core";
import { NgxDatatableModule } from "@swimlane/ngx-datatable";
import { RouterModule } from "@angular/router";
import { TableEditingComponent } from "./table-editing/table-editing.component";
import { TableFilterComponent } from "./table-filter/table-filter.component";
import { TablePagingComponent } from "./table-paging/table-paging.component";
import { TablePinningComponent } from "./table-pinning/table-pinning.component";
import { TableSelectionComponent } from "./table-selection/table-selection.component";
import { TableSortingComponent } from "./table-sorting/table-sorting.component";

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(DatatableRoutes),
    NgxDatatableModule
  ],
  declarations: [
    DataTableComponent,
    TableEditingComponent,
    TableFilterComponent,
    TablePagingComponent,
    TablePinningComponent,
    TableSelectionComponent,
    TableSortingComponent
  ]
})
export class DatatableModule {}
