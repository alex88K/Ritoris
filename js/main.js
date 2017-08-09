$(function() {

$("[data-fancybox]").fancybox({
	animationEffect: "zoom-in-out"
});

$('.fancybox').fancybox({});

/*--Sliders------------------------------------------------*/ 
	
	$('.promo-slider .slider-inner').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		fade: true,
		appendDots: $('.dots-nav > .container'),
		arrows: false,
		infinite: true,
		speed: 600
	});

	$('.upcoming-events .slider-inner').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		infinite: true,
		speed: 600,
		// autoplay: true,
		responsive: [
			{
				breakpoint: 481,
				settings: { slidesToShow: 1 }
			}
		]
	});

	$('.about-slider .slider-inner').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		infinite: true,
		speed: 600,
		autoplay: true,
		prevArrow: $('.about-slider .prev'),
		nextArrow: $('.about-slider .next'),
		responsive: [
			{
				breakpoint: 990,
				settings: { slidesToShow: 2 }
			},
			{
				breakpoint: 767,
				settings: { slidesToShow: 1 }
			}
		]	
	});

	$('.oclasses-slider .slider-inner').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		infinite: true,
		speed: 600,
		autoplay: true,
		prevArrow: $('.oclasses-slider .prev'),
		nextArrow: $('.oclasses-slider .next'),
		responsive: [
			{
				breakpoint: 768,
				settings: { slidesToShow: 1 }
			}
		]
	});

	$('.article-slider .slider-inner').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
		speed: 600,
		prevArrow: $('.article-slider .prev'),
		nextArrow: $('.article-slider .next'),
		responsive: [
			{
				breakpoint: 767,
				settings: { slidesToShow: 1 }
			},
			{
				breakpoint: 768,
				settings: { slidesToShow: 3 }
			}
		]
	});

/*--Articles & News grid---------------*/

	var $grid = $('.grid').masonry({
	  columnWidth: '.grid-item',
	  gutter: 30,
	  itemSelector: '.grid-item',
	  percentPosition: true
	});

	$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
	}); 

/*--Profile-page-----------*/

 $('.mob-mode .nav-toggle').on('click', function() {
 	$(this).toggleClass('menu-active');
 	$('.profile-aside').toggleClass('opened');
 }); 

/*--AJAX Form submit for MODx--------*/

	// show success message after submit

	$(document).on('af_complete', function(event,response) {
		var form_id = response.form.parents('.modal').attr('id');
		if (response.success) {
			$('#'+form_id).modal('hide');
			$('#modal-mes').modal('show');
		}
	});

});

/*-----------------------------*/ 

function initMap() {
   var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 55.7593203, lng: 37.6371473},
      zoom: 17
   });
   var marker = new google.maps.Marker({
      position: {lat: 55.7593203, lng: 37.6371473},
      map: map,
      title: '111398, г. Москва, ул. Кусковская, д. 16 оф. 3'
   });
}

/* SVG fix for Firefox */ 
(function(document, window) {
	"use strict";
	document.addEventListener("DOMContentLoaded", function() {
		var baseUrl = window.location.href
			.replace(window.location.hash, "");

		if( baseUrl.indexOf("#") !== -1 ) { baseUrl = baseUrl.replace("#", ""); }
			
		[].slice.call(document.querySelectorAll("use[*|href]"))
			.filter(function(element) {
				return (element.getAttribute("xlink:href").indexOf("#") === 0);
			})
			.forEach(function(element) {
				element.setAttribute("xlink:href", baseUrl + element.getAttribute("xlink:href"));
			});
	}, false);
}(document, window));