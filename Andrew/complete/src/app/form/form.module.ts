import { FormsModule, ReactiveFormsModule } from "@angular/forms";

import { BasicComponent } from "./basic/basic.component";
import { CommonModule } from "@angular/common";
import { EditorComponent } from "./editor/editor.component";
import { FileUploadModule } from "ng2-file-upload";
import { FormRoutes } from "./form.routing";
import { MasksComponent } from "./masks/masks.component";
import { NgModule } from "@angular/core";
import { NgbProgressbarModule } from "@ng-bootstrap/ng-bootstrap";
import { NgxValidatorModule } from "@why520crazy/ngx-validator";
import { RouterModule } from "@angular/router";
import { TextMaskModule } from "angular2-text-mask";
import { UploadComponent } from "./upload/upload.component";
import { ValidationComponent } from "./validation/validation.component";

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild(FormRoutes),
    FormsModule,
    ReactiveFormsModule,
    NgbProgressbarModule,
    NgxValidatorModule,
    TextMaskModule,
    FileUploadModule
  ],
  declarations: [
    BasicComponent,
    MasksComponent,
    EditorComponent,
    ValidationComponent,
    UploadComponent
  ]
})
export class FormModule {}
