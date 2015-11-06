$(function(){

	$('.burger').on('click', function(){
		$("nav").animate({right: '0'}, 250, 'swing');
		$("body").animate({left: '-300px'}, 250, 'swing');
	});


	$('.nav-close').on('click', function(){
		$("nav").animate({right: '-300px'}, 250, 'swing');
		$("body").animate({left: '0'}, 250, 'swing');
	});

	$('a').smoothScroll({
		speed: 400
	});

	$('#mikebell').circleType({
		radius: 600
	});

});

