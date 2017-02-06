$( document ).ready(function() {

	/*	$( ".bgMeCells" ).hover(
	  function() {
	    $( this ).animate({opacity:0.5}, 100);
	  }, function() {
	    $( this ).animate({opacity:1}, 100);
	  }
	);*/


	$( "#smallMenu" ).click(function() {
		var width = $("#smBox").css("width");
		if (width == "0px") {
			$("#smBox").css( "width", "307px");
			$("#smBoLinksBox").stop().delay(500).queue(function() {
               $(this).css( "opacity", 1).dequeue();
           });
		}
		else {
			$("#smBox").css( "width", "0px");
			$("#smBoLinksBox").stop().css( "opacity", 0);
		}
	});

    /*$('#menu8').blabla();*/
});

/*(function( $ ){
   $.fn.blabla = function() {
      console.log( "ready!" );
      return this;
   }; 
})( jQuery );*/