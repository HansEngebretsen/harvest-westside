$(document).ready(function () {

	$(".contact-handle").click(function (event) {
		event.preventDefault();
		$("body").toggleClass("menu-active");
	});
	if ($(window).width() >= 950) {
		$(function () {
			var addSit = $('.service-time');
			addSit.animate({ width: 'toggle' }, 0); // run it once to hide
			$('.page-nav .logo').css('cursor', 'pointer').click(function (e) {
				e.preventDefault();
				addSit.animate({ width: 'toggle' }, '400');
			});
		});
	};
	$(".give-toggle").click(function (event) {
		event.preventDefault();
		$(this).parent('.give-wrap').toggleClass("slide-up");
	});

	$(".button.give").click(function (event) {
		var value = $(this).siblings(".amount-input").val();
		var numValue = parseFloat(value || "0");
		if (!value || isNaN(numValue) || numValue < 1) {
			alert("Please enter a donation amount.");
			event.preventDefault();
		}
	})

	$(function () {

		// grab the initial top offset of the navigation 
		var sticky_navigation_offset_top = $('#header').offset().top;

		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var sticky_navigation = function () {
			var scroll_top = $(window).scrollTop(); // our current vertical position from the top

			// if we've scrolled more than the navigation, change its position to fixed to stick to top,
			// otherwise change it back to relative
			if (scroll_top - 43 > sticky_navigation_offset_top) {
				$('.page-nav').addClass('scroll');
				$('#header').css({ 'position': 'fixed' });
			} else {
				$('.page-nav').removeClass('scroll');
				$('#header').css({ 'position': 'absolute' });
			}
		};

		// run our function on load
		sticky_navigation();

		// and run it again every time you scroll
		$(window).scroll(function () {
			sticky_navigation();
		});

	});
});

$(window).scroll(function () {
	$(".page-link.active").removeClass("active");

	var scroll = $(window).scrollTop();
	var home = $('#page-zero').offset().top - "3";
	var services = $('#page-one').offset().top - "3";
	var about = $('#page-two').offset().top - "3";


	if (scroll <= services) {
		$("#page-link-zero").addClass("active");
	}
	else if (scroll <= about) {
		$("#page-link-one").addClass("active");
	}
	else if (scroll >= services) {
		$("#page-link-two").addClass("active");
	}

});
$(function () {
	$('.page-nav .page-link a').bind('click', function (event) {
		var $anchor = $(this);

		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		/*
		if you don't want to use the easing effects:
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1000);
		*/
		event.preventDefault();
	});
});
