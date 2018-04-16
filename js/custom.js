$(document).ready(function() {
	
	$( "h3.tap_title + p" ).hide();
	
	$( ".tap_title" ).click(function() {
		$(this).siblings( "p" ).slideToggle();
	});
	
	// Form
	
	if ($('#schedule_list').length > 0) {
	
		$('#schedule_list').find('a').each(function() {
			
			$(this).click( function() {
				
				var date = $(this).find('strong').html();
				
				sessionStorage.setItem("formDate", date);
					
			});
					
		});
	
	}
	
	if ($('#Field3').length > 0) {
	
		if (sessionStorage.getItem("formDate") != null) {
		
			var date = sessionStorage.getItem("formDate");
			
			$('#Field3').val(date);
			
		}
	
	}

});