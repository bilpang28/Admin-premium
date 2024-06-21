import * as shape from "d3-shape";

import { colors, generateData, multi, single } from "../../core";

import { Component } from "@angular/core";

@Component({
  selector: "app-line",
  templateUrl: "./line.component.html",
  styleUrls: ["./line.component.scss"]
})
export class LineComponent {
  single: any[];
  multi: any[];
  dateData: any[];
  dateDataWithRange: any[];
  range = false;

  // options
  showXAxis = true;
  showYAxis = true;
  gradient = false;
  showLegend = false;
  showXAxisLabel = true;
  tooltipDisabled = false;
  xAxisLabel = "Country";
  showYAxisLabel = true;
  yAxisLabel = "GDP Per Capita";
  showGridLines = true;
  innerPadding = 0;
  barPadding = 8;
  groupPadding = 16;
  roundDomains = false;
  maxRadius = 10;
  minRadius = 3;

  // line interpolation
  curve = shape.curveBasis;

  colorScheme = {
    domain: colors
  };
  schemeType = "ordinal";
  rangeFillOpacity = 0.15;

  // line, area
  autoScale = true;
  timeline = false;

  constructor() {
    Object.assign(this, {
      single,
      multi
    });

    this.dateData = generateData(5, false);
    this.dateDataWithRange = generateData(2, true);
  }

  get dateDataWithOrWithoutRange() {
    if (this.range) {
      return this.dateDataWithRange;
    } else {
      return this.dateData;
    }
  }

  select(data) {
    console.log("Item clicked", data);
  }

  onLegendLabelClick(entry) {
    console.log("Legend clicked", entry);
  }
}
