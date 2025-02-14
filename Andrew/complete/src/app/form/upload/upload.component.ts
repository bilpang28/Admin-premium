import { ChangeDetectionStrategy, Component } from "@angular/core";

import { FileUploader } from "ng2-file-upload";

const URL = "https://evening-anchorage-3159.herokuapp.com/api/";

@Component({
  selector: "app-upload",
  templateUrl: "./upload.component.html",
  changeDetection: ChangeDetectionStrategy.OnPush,
  styleUrls: ["./upload.component.scss"]
})
export class UploadComponent {
  uploader: FileUploader = new FileUploader({
    url: URL,
    isHTML5: true
  });
  hasBaseDropZoneOver = false;
  hasAnotherDropZoneOver = false;

  fileOverBase(e: any): void {
    this.hasBaseDropZoneOver = e;
  }

  fileOverAnother(e: any): void {
    this.hasAnotherDropZoneOver = e;
  }
}
