<?php

	if( have_rows('limited_kitchen_creations', 'option') ):
	
		echo '<div class="kitchen_wrapper">';
	
		echo '<h2>Limited Kitchen Creations</h2>';
					
		while ( have_rows('limited_kitchen_creations', 'option') ) : the_row();
		
			echo '<div class="kitchen_item">';
		
			echo '<h4>';
	        
			the_sub_field('name');
			
			echo '</h4>';
				
			the_sub_field('description');
			
			echo '</div>';

		endwhile;
		
		echo '</div>';
						
	else :
			
	endif;
	
?>