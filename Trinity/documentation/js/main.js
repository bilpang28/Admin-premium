$(function (){
	'use strict';
	$('.sidebar').stick_in_parent();

	// Min Height
	$(window).on('resize', function(){
		$('.all').css('min-height', $(window).height())
	});

	// Smooth Scroll

	smoothScroll.init({
		speed: 500, // Integer. How fast to complete the scroll in milliseconds
		easing: 'easeInOutCubic', // Easing pattern to use
		updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
	});

	// Make Code Pretty
    window.prettyPrint && prettyPrint();
});