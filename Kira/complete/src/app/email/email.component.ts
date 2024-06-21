import { Component, NgZone, OnInit } from "@angular/core";
import { Observable, Subscription } from "rxjs";
import { filter, map } from "rxjs/operators";

import { BreakpointObserver } from "@angular/cdk/layout";
import { MailService } from "./email.service";
import { Message } from "./message";

const SMALL_WIDTH_BREAKPOINT = 991;

@Component({
  selector: "app-email",
  templateUrl: "./email.component.html",
  styleUrls: ["./email.component.scss"],
  providers: [MailService]
})
export class EmailComponent implements OnInit {
  isScreenSmall: Observable<boolean>;
  messages: Message[];
  selectedMessage: Message;
  messageOpen = false;
  isOpened = true;
  _autoCollapseWidth = 991;

  constructor(
    private mailService: MailService,
    breakpoints: BreakpointObserver
  ) {
    this.isScreenSmall = breakpoints
      .observe(`(max-width: ${SMALL_WIDTH_BREAKPOINT}px)`)
      .pipe(map(breakpoint => breakpoint.matches));
  }

  ngOnInit(): void {
    if (this.isScreenSmall) {
      this.isOpened = false;
    }
    this.getMessages();
  }

  toogleSidebar(): void {
    this.isOpened = !this.isOpened;
  }

  getInitials(name) {
    return name.match(/\b(\w)/g).join("");
  }

  getMessages(): void {
    this.mailService.getMessages().then(messages => {
      this.messages = messages;
      this.selectedMessage = this.messages[0];
    });
  }

  onSelect(message: Message): void {
    this.selectedMessage = message;
    if (this.isScreenSmall) {
      this.isOpened = false;
    }
  }
}
