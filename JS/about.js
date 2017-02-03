



$( document ).ready(function() {

	/*	$( ".bgMeCells" ).hover(
	  function() {
	    $( this ).animate({opacity:0.5}, 100);
	  }, function() {
	    $( this ).animate({opacity:1}, 100);
	  }
	);*/


	$( "#smallMenu" ).click(function() {
		var width = $("#smMeContainer").css("width");
		if (width == "0px") {
			$("#smMeContainer").css( "width", "50%");
			$("#smMeCoLinks").delay(500).queue(function() {
               $(this).css( "opacity", 1).dequeue();
           });
		}
		else {
			$("#smMeContainer").css( "width", "0px");
			$("#smMeCoLinks").css( "opacity", 0);
		}
	});

    /*$('#menu8').blabla();*/
});

$(window).on('load', function() { 
		$("#intro").delay(200).animate({opacity:1}, 2000, function() {
		$("#smallMenu").fadeIn(2000);
		$("#language").fadeIn(2000);
	});
});




/*(function( $ ){
   $.fn.blabla = function() {
      console.log( "ready!" );
      return this;
   }; 
})( jQuery );*/
