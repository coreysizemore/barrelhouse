<?php
	
	if( have_rows('cb_links') ):
		
		echo '<div id="website_link_wrapper">';
					
		while ( have_rows('cb_links') ) : the_row();
		
			echo '<div class="website_link_item">';
			
			echo '<a href="';
				
			the_sub_field('link_url');
			
			echo '" target="_blank"><img src="';
			
			the_sub_field('logo_icon');
			
			echo '" />';
			
			echo '</a></div>';

		endwhile;
		
		echo '</div>';
			
	endif;
		
?>