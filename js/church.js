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

	$('form').submit(doAmazonPayment);

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

function buildParamString(params) {
	params.sort(function (a, b) {
		if (a.key == b.key) return 0;
		if (a.key < b.key) return -1;
		return 1;
	});

	var x = $.map(params, function (e) {
		return encodeURIComponent(e.key) + '=' + encodeURIComponent(e.val);
	});

	return x.join("&");
}
function buildString(verb, host, uri, params) {
	return verb + "\n" +
        host + "\n" +
        uri + "\n" +
        buildParamString(params);
}
function signRequest(verb, host, uri, params) {
	var str = buildString(verb, host, uri, params);
	var hash = CryptoJS.HmacSHA256(str, "1234567890");
	var base64 = CryptoJS.enc.Base64.stringify(hash);
	return base64;
}

function doAmazonPayment() {
	var $form = $(this);
	var $inputs = $form.find('input');

	var value = $inputs.filter('[name=amount]').val();
	var numValue = parseFloat(value || "0");
	if (!value || isNaN(numValue) || numValue < 1) {
		alert("Please enter a donation amount.");
		event.preventDefault();
		return false;
	}

	var params = $inputs.map(function (_, el) {
		var $x = $(el);
		return { key: $x.attr('name'), val: $x.val() };
	}).get();

	var signature = signRequest(
		'POST',
		'authorize.payments.amazon.com',
		'/pba/paypipeline',
		params);

	$form.append(
		$('<input>')
			.attr('type', 'hidden')
			.attr('name', 'description')
			.val(signature));
}
