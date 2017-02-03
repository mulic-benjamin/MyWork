



$( document ).ready(function() {

});

$(window).on('load', function() { 
	$("#intro,#content").delay(200).animate({opacity:1}, 2000, function() {
		$("#smallMenu").fadeIn(2000);
		$("#language").fadeIn(2000);
	});
});