$(document).ready(function() {

	$( "h3.tap_title + p" ).hide();
	
	$( ".tap_title" ).click(function() {
		$(this).siblings( "p" ).slideToggle();
	});
	
	
	
	/* tap it form */
	
	if ($('.tap_it_table_wrapper').length > 0) {
	
		$('.table_row').find('span.link').click( function() {
			
			var date = $(this).siblings('.date').html();
			
			sessionStorage.setItem("formDate", date);
			
		});
	}
	
	if ($('.tap_it_form_wrapper').length > 0) {
		
		var submitDate = sessionStorage.getItem("formDate");
		
		$('#Field3').val(submitDate);
	
	}
	
});