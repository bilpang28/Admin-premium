
/*
Template Name: Simulor - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 2.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Form Advanced init js
*/

!function($) {
    "use strict";

    var Components = function() {};

    //initializing Custom Select
    Components.prototype.initCustomSelect = function() {
        $('[data-plugin="customselect"]').niceSelect();
    },

    //switch
    Components.prototype.initSwitchery = function() {
        $('[data-plugin="switchery"]').each(function (idx, obj) {
            new Switchery($(this)[0], $(this).data());
        });
    },

    //Select2
    Components.prototype.initSelect2 = function() {
        // Select2
        $('[data-toggle="select2"]').select2();
    },

    //Max Length
    Components.prototype.initMaxLength = function() {
        //Bootstrap-MaxLength
        $('input#defaultconfig').maxlength({
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('input#thresholdconfig').maxlength({
            threshold: 20,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('input#alloptions').maxlength({
            alwaysShow: true,
            separator: ' out of ',
            preText: 'You typed ',
            postText: ' chars available.',
            validate: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('textarea#textarea').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('input#placement').maxlength({
            alwaysShow: true,
            placement: 'top-left',
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });
    },

    Components.prototype.initDateRange = function() {
        var defaultOptions = {
            "cancelClass": "btn-light",
            "applyButtonClasses": "btn-success"
        };

        // date pickers
        $('[data-toggle="date-picker"]').each(function (idx, obj) {
            var objOptions = $.extend({}, defaultOptions, $(obj).data());
            $(obj).daterangepicker(objOptions);
        });

        //date pickers ranges only
        var start = moment().subtract(29, 'days');
        var end = moment();
        var defaultRangeOptions = {
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        };

        $('[data-toggle="date-picker-range"]').each(function (idx, obj) {
            var objOptions = $.extend({}, defaultRangeOptions, $(obj).data());
            var target = objOptions["targetDisplay"];
            //rendering
            $(obj).daterangepicker(objOptions, function(start, end) {
                if (target)
                    $(target).html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });
        });
    },

    /** 
     * Initlized mask
    **/
   Components.prototype.initMask = function() {
        $('[data-toggle="input-mask"]').each(function (idx, obj) {
            var maskFormat = $(obj).data("maskFormat");
            var reverse = $(obj).data("reverse");
            if (reverse != null)
                $(obj).mask(maskFormat, {'reverse': reverse});
            else
                $(obj).mask(maskFormat);
        });
    },


    //initilizing
    Components.prototype.init = function() {
        var $this = this;
        this.initCustomSelect(),
        this.initSwitchery(),
        this.initSelect2(),
        this.initMaxLength(),
        this.initDateRange(),
        this.initMask()
    },

    $.Components = new Components, $.Components.Constructor = Components

}(window.jQuery),
    //initializing main application module
function($) {
    "use strict";
    $.Components.init();
}(window.jQuery);