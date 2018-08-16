$(document).ready(function() {

	$( "h3.tap_title + p" ).hide();
	
	$( ".tap_title" ).click(function() {
		$(this).siblings( "p" ).slideToggle();
	});	
	
});