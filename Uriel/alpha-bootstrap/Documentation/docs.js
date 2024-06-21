$( document ).ready(function() {
    
    "use strict";
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);
        var scrollTo = $target.offset().top - 80

        $('html, body').stop().animate({
            'scrollTop': scrollTo
        }, 500);
    });
    $('pre').addClass('prettyprint');
    prettyPrint();
});
