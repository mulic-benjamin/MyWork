



$( document ).ready(function() {

	$( ".bgMeCeHoover" ).hover(
	  function() {
	    $( this ).css( "opacity", 1);
	  }, function() {
	    $( this ).css( "opacity", 0);
	  }
	);

});

$(window).on('load', function() { 
	$("#intro").delay(200).animate({opacity:1}, 2000, function() {
		$("#smallMenu").fadeIn(2000);
		$("#instagram").fadeIn(2000);
		$("#newsletter").fadeIn(2000);
		$("#language").fadeIn(2000);
		$("#content").css("display","block");
	});
});