<?php
	
	if( have_rows('tap_it') ):
		
		echo '<div class="tap_it_table_wrapper">';
					
		while ( have_rows('tap_it') ) : the_row();
		
			echo '<div class="table_row">';
			
			if ( get_sub_field('date') ) :
										    
			    echo '<span class="date">';
			    
			    echo the_sub_field('date');
			    
			    echo '</span>';
			    
			    if ( get_sub_field('tapper') || get_sub_field('holder') || get_sub_field('location') ):
			    
				    echo '<span><strong>Tapper:</strong> ';
				    
				    echo the_sub_field('tapper');
				    
				    echo '</span>';
				    
				    echo '<span><strong>Holder:</strong> ';
				    
				    echo the_sub_field('holder');
				    
				    echo '</span>';
				    
			        echo '<span><strong>Hometown:</strong> ';
			        
			        echo the_sub_field('location');
			        
			        echo '</span>';
			        
			    else :
			    
			    	echo '<span class="link"><a href="http://www.cascadebrewingbarrelhouse.com/tap-it-tuesday-submission/">Date Available</a></span>';
			        
			    endif;
		        
		        echo '</div>';
		        
		    endif;

		endwhile;
		
		echo '</div>';
			
	endif;
		
?>