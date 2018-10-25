<?php
	
	if( have_rows('retailers', 'option') ):
		
		echo '<div id="retailer_list">';
					
		while ( have_rows('retailers', 'option') ) : the_row();
		
			echo '<div class="retailer_item"><div class="retailer_name">';

			the_sub_field('name');

			echo '</div>';
			
			echo '<div class="retailer_address">';
				
			the_sub_field('address');
			
			echo '</div>';
			
			echo '<div class="retailer_website"><a href="';
				
			the_sub_field('website');
			
			echo '" target="_blank">Visit Website</a></div></div>';

		endwhile;
		
		echo '</div>';
						
	else :
	
		echo '<div id="retailer_list">No Retailers</div>';
			
	endif;
		
?>