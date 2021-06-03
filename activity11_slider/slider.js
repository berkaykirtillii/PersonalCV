$(document).ready(function() {

    $("#slider").bxSlider({
		auto: true,
		randomStart: true,
		moveSlides: 1,
		speed: 3000,
		pager: true,
		pagerType: 'short',
		pagerSelector : '#pager',
		minSlides: 1,
		maxSlides: 1,
		slideWidth: 250,
		slideMargin: 10
	});

});