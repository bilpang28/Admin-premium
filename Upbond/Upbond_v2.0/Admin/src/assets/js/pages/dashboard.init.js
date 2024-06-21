/*
Template Name: Droid -  Admin & Dashboard Template
Author: Themesdesign
Contact: themesdesign.in@gmail.com
File: Dashboard Init Js File
*/


//  SparkLine chart datalabel

var optionsSpark3 = {
    series: [{
        name: 'series1',
        data: [20, 60, 29, 96, 25, 62, 17]
    }, {
        name: 'series2',
        data: [50, 22, 82, 20, 86, 36, 71]
    }],
    chart: {
        type: 'area',
        height: 50,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        show: false,
        curve: 'smooth'
    },
    colors: ['#5867c3', '#34c38f'],
    xaxis: {
        crosshairs: {
            width: 1
        },
    },
    yaxis: {
        min: 0
    },
    subtitle: {

        offsetX: 0,
        style: {
            fontSize: '14px',
        }
    },
};

var chartSpark3 = new ApexCharts(document.querySelector("#visitors_charts"), optionsSpark3);
chartSpark3.render();


// SparkLine chart datalabel

var optionsSpark3 = {
    series: [{
        name: 'series1',
        data: [28, 65, 32, 86, 38, 71, 40, 60, 20]
    }],
    chart: {
        type: 'area',
        height: 50,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        show: false,
        curve: 'straight'
    },
    fill: {
        opacity: 0.3
    },
    colors: ['#5867c3'],
    xaxis: {
        crosshairs: {
            width: 1
        },
    },
    yaxis: {
        min: 0
    }
};

var chartSpark3 = new ApexCharts(document.querySelector("#order_charts"), optionsSpark3);
chartSpark3.render();

// Customer Report
var options = {
    series: [{
        name: "Customer",
        data: [20, 10, 22, 15, 25, 20, 30, 25, 35]
    }],
    chart: {
        height: 290,
        type: 'line',
        toolbar: {
            show: false,
        },
        zoom: {
            enabled: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    title: {
        show: false
    },
    grid: {
        borderColor: '#b8bfc6',
        xaxis: {
            lines: {
                show: true
            }
        },
        yaxis: {
            lines: {
                show: false
            }
        },
    },

    colors: ['#5867c3'],

    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
    },
    yaxis: {
        labels: {
            show: false,
        }
    }
};

var chart = new ApexCharts(document.querySelector("#line_chart"), options);
chart.render();

//   spline_area_Month

var options = {
    chart: {
        height: 368,
        type: 'area',
        toolbar: {
            show: false,
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
    },
    series: [{
        name: 'series1',
        data: [38, 40, 28, 63, 42, 109, 97]
    }, {
        name: 'series2',
        data: [52, 60, 35, 56, 34, 52, 41]
    }],
    colors: ['#5867c3', '#34c38f'],
    xaxis: {
        type: 'month',
        categories: ["Jan", "Feb", "Mar", "April", "May", "Jun", "Julay"],
    },
    grid: {
        borderColor: '#f1f1f1',
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
}

var chart = new ApexCharts(
    document.querySelector("#spline_area_month"),
    options
);
chart.render();

//   spline_area_year

var options = {
    chart: {
        height: 368,
        type: 'area',
        toolbar: {
            show: false,
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
    },
    series: [{
        name: 'series1',
        data: [70, 40, 75, 38, 88, 50, 90]
    }, {
        name: 'series2',
        data: [42, 60, 38, 66, 44, 69, 45]
    }],
    colors: ['#5867c3', '#34c38f'],
    xaxis: {
        type: 'year',
        categories: ["2015", "2016", "2017", "2018", "2019", "2020", "2021"],
    },
    grid: {
        borderColor: '#f1f1f1',
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
}

var chart = new ApexCharts(
    document.querySelector("#spline_area_year"),
    options
);

chart.render();

//Revenue yearly -column chart with datalabels

var options = {
    chart: {
        height: 223,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    plotOptions: {
        bar: {
            dataLabels: {
                position: 'top', // top, center, bottom
            },
        }
    },
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return val + "%";
        },
        offsetY: -22,
        style: {
            fontSize: '12px',
            colors: ["#304758"]
        }
    },
    series: [{
        name: 'Inflation',
        data: [2.5, 3.2, 5.0, 10.1, 4.2, 3.8, 3, 2.4, 4.0, 1.2, 3.5, 0.8]
    }],
    colors: ['#5867c3'],
    grid: {
        borderColor: '#f1f1f1',
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        position: 'top',
        labels: {
            show: false,
            offsetY: -18,

        },
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        tooltip: {
            enabled: true,
            offsetY: -35,
        }
    },
    yaxis: {
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false,
        },
        labels: {
            show: false,
            formatter: function (val) {
                return val + "%";
            }
        }
    },
    title: {
        text: 'Yearly Revenue',
        floating: true,
        offsetY: 205,
        align: 'center',
        style: {
            color: '#adb5bd',
            fontWeight: '500',
            fontSize: '15px'
        }
    },
}

var chart = new ApexCharts(
    document.querySelector("#column_chart_datalabel"),
    options
);

chart.render();

// Target - radialBar

var options = {
    series: [50, 77],
    chart: {
        height: 310,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 5,
                size: '60%',

            },
            track: {
                margin: 10,
            },
            dataLabels: {
                showOn: "always",
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        return 73.7
                    }
                },
                name: {
                    show: true,
                    color: '#000',
                    fontSize: "15px"
                },
                value: {
                    show: true,
                    fontSize: '24px',
                }
            }
        }
    },
    fill: {
        colors: ['#556ee6', '#34c38f']
    },
    stroke: {
        lineCap: 'round'
    },
    labels: ['Weekly', 'Monthly'],

};


var chart = new ApexCharts(document.querySelector("#target_charts"), options);
chart.render();
