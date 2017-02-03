



$( document ).ready(function() {

	/*	$( ".bgMeCells" ).hover(
	  function() {
	    $( this ).animate({opacity:0.5}, 100);
	  }, function() {
	    $( this ).animate({opacity:1}, 100);
	  }
	);*/



	$( ".bgMeCeHoover" ).hover(
	  function() {
	    $( this ).css( "opacity", 1);
	  }, function() {
	    $( this ).css( "opacity", 0);
	  }
	);



	$( "#smallMenu" ).click(function() {
		var width = $("#smMeContainer").css("width");
		if (width == "0px") {
			$("#smMeContainer").css( "width", "50%");
			$("#smMeCoLinks").stop().delay(500).queue(function() {
               $(this).css( "opacity", 1).dequeue();
           	});
		}
		else {
			$("#smMeContainer").css( "width", "0px");
			$("#smMeCoLinks").stop().css( "opacity", 0);
		}
	});

    /*$('#menu8').blabla();*/
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




/*(function( $ ){
   $.fn.blabla = function() {
      console.log( "ready!" );
      return this;
   }; 
})( jQuery );*/
