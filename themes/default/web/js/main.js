var $jq = jQuery.noConflict();

$jq(window).load(function(event){
	
	var sl2shCor = 3;
	var sl2scCor = 1;
	var sl2shMSer = 6;
	
	if ($jq(window).width() < 680) {
		sl2shCor = 1;
		sl2scCor = 1;
		sl2shMSer = 3;
	}
	
	$jq('.slider.main-carousel article').slick({
		slidesToShow: sl2shCor,
		slidesToScroll: sl2scCor,
		autoplay: true,
		autoplaySpeed: 6000,
		speed: 800
	});
	
	$jq('.slider.main-services').slick({
		slidesToShow: sl2shMSer,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		infinite: false
	});

	$jq('.slider.main-services').on(
		'beforeChange',
		function(event, slick, currentSlide, nextSlide){
			$jq(".slider-range").slider( "value", nextSlide );
		}
	);

	$jq(window).resize(slickResize);

	$jq("#slider-range").slider({
		range: "min",
		value: 0,
		min: 0,
		max: 2,
		animate: "fast",
		change: function( event, ui ) {
			$jq('.slider.main-services').slick('slickGoTo', ui.value, false);
		},
		slide: function( event, ui ) {
			$jq('.slider.main-services').slick('slickGoTo', ui.value, false);
		},
		start: function( event, ui ) {
			$jq('.slider.main-services').slick('slickGoTo', ui.value, false);
		},
		stop: function( event, ui ) {
			$jq('.slider.main-services').slick('slickGoTo', ui.value, false);
		}
	});
	
	$jq('.services .slides').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		infinite: false,
		asNavFor: '.services .btns'
	});
	
	$jq('.services .btns').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		infinite: false,
		focusOnSelect: true,
		asNavFor: '.services .slides',
		useCSS: false,
		useTransform: false
	});
	
	$jq('table .btn').click(function() {
		$jq(this).closest('section').toggleClass('table-view');
	});
	
});

function slickResize() {
	if ($jq(window).width() < 680) {
		$jq('.slider.main-carousel article').slick('slickSetOption',  'slidesToScroll', 1);
		$jq('.slider.main-carousel article').slick('slickSetOption',  'slidesToShow', 1);
		$jq('.slider.main-services').slick('slickSetOption',  'slidesToShow', 3);
		
		$jq('.slider.main-carousel article').slick('slickGoTo', 1, false);
		$jq('.slider.main-services').slick('slickGoTo', 1, false);
	}
}