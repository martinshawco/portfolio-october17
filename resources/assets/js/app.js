require('./bootstrap');

$(document).ready(function(){

	// Disable splashscreen by default, implement in individual page scss
	$(".splashscreen_container").hide();

	// Reveal page on DocumentReady to avoid flash
	$("body").animate({opacity: 1}, 2000);
});