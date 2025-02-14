import { Component, OnInit } from "@angular/core";
import { FormControl, FormGroup, Validators } from "@angular/forms";

import { CustomValidators } from "ng2-validation";

@Component({
  selector: "app-validation",
  templateUrl: "./validation.component.html",
  styleUrls: ["./validation.component.scss"]
})
export class ValidationComponent implements OnInit {
  form: FormGroup;
  num = 5;

  ngOnInit() {
    const password = new FormControl("", Validators.required);
    const certainPassword = new FormControl(
      "",
      CustomValidators.notEqualTo(password)
    );

    this.form = new FormGroup({
      password,
      certainPassword
    });
  }

  onSubmit(form) {
    console.log(form);
  }
}
