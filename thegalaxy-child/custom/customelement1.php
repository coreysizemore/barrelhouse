<?php

	echo '<div class="on_tap_wrapper"><div class="container"><div class="row gutters">';
	
	if( have_rows('on_tap_list', 'option') ):
		
		echo '<div class="col_6"><div class="content" id="on_tap">';
		
		echo '<h1>On Tap</h1>';
		
		echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade, <span class="tallboy-icon"></span> Tall Boy</p>';
					
		while ( have_rows('on_tap_list', 'option') ) : the_row();
		
			if( get_sub_field('item_active')):
		
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				$options = get_sub_field('avaliable_in');
				
				if( $options ):
				
					echo '<ul>';
					
					foreach( $options as $option ):
					
						echo '<li>';
						
						echo '<span class="';
						
						echo $option;
						
						echo '-icon"></span>';
						
						echo '</li>';
						
					endforeach;
					
					echo '</ul>';
					
				else :
				
					// nothing
					
				endif;
				
				echo '</div>';
				
			endif;

		endwhile;
				
		echo '</div></div>';
						
	else :
	
		echo '<div class="col_6"><div class="content" id="on_tap"><p>No Items</p></div></div>';
			
	endif;
	
	if( have_rows('on_tap_now', 'option') ):
	
		echo '<div class="col_6"><div class="content" id="on_tap">';
	
		//echo '<h1>Live From the Barrel</h1>';
		
		//echo '<p>Cask Beers on tap Now:</p>';
		
		
		
		while ( have_rows('on_tap_now', 'option') ) : the_row();
		
			if( get_sub_field('item_active')):
		
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				$options = get_sub_field('avaliable_in');
				
				if( $options ):
				
					echo '<ul>';
					
					foreach( $options as $option ):
					
						echo '<li>';
						
						echo '<span class="';
						
						echo $option;
						
						echo '-icon"></span>';
						
						echo '</li>';
						
					endforeach;
					
					echo '</ul>';
					
				else :
				
					// nothing
					
				endif;
				
				echo '</div>';
				
			endif;

		endwhile;
		
		while ( have_rows('next_weeks_barrel', 'option') ) : the_row();
		
			if( get_sub_field('item_active')):
			
				echo '<p style="margin-top: 0px;">Next Weeks Barrel:</p>';
		
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				$options = get_sub_field('avaliable_in');
				
				if( $options ):
				
					echo '<ul>';
					
					foreach( $options as $option ):
					
						echo '<li>';
						
						echo '<span class="';
						
						echo $option;
						
						echo '-icon"></span>';
						
						echo '</li>';
						
					endforeach;
					
					echo '</ul>';
					
				else :
				
					// nothing
					
				endif;
				
				echo '</div>';
				
			endif;

		endwhile;
		
		echo '<h1 style="margin-top: 0px;">From the Cellar</h1>';
		
		echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade, <span class="tallboy-icon"></span> Tall Boy</p>';
					
		while ( have_rows('blenders_reserve_taps', 'option') ) : the_row();
		
			if( get_sub_field('item_active')):
		
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				$options = get_sub_field('avaliable_in');
				
				if( $options ):
				
					echo '<ul>';
					
					foreach( $options as $option ):
					
						echo '<li>';
						
						echo '<span class="';
						
						echo $option;
						
						echo '-icon"></span>';
						
						echo '</li>';
						
					endforeach;
					
					echo '</ul>';
					
				else :
				
					// nothing
					
				endif;
				
				echo '</div>';
				
			endif;

		endwhile;
		
		echo '<h1 style="margin-top: 80px;">On Nitro!</h1>';
		
		
		
		while ( have_rows('on_nitro', 'option') ) : the_row();
		
			if( get_sub_field('item_active')):
		
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				$options = get_sub_field('avaliable_in');
				
				if( $options ):
				
					echo '<ul>';
					
					foreach( $options as $option ):
					
						echo '<li>';
						
						echo '<span class="';
						
						echo $option;
						
						echo '-icon"></span>';
						
						echo '</li>';
						
					endforeach;
					
					echo '</ul>';
					
				else :
				
					// nothing
					
				endif;
				
				echo '</div>';
				
			endif;

		endwhile;
		
		echo '<h1 style="margin-top: 80px;">Guest Taps</h1>';
		
		echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade, <span class="tallboy-icon"></span> Tall Boy</p>';
		
		while ( have_rows('guest_tap', 'option') ) : the_row();
		
			if( get_sub_field('item_active')):
		
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				$options = get_sub_field('avaliable_in');
				
				if( $options ):
				
					echo '<ul>';
					
					foreach( $options as $option ):
					
						echo '<li>';
						
						echo '<span class="';
						
						echo $option;
						
						echo '-icon"></span>';
						
						echo '</li>';
						
					endforeach;
					
					echo '</ul>';
					
				else :
				
					// nothing
					
				endif;
				
				echo '</div>';
				
			endif;

		endwhile;
		
		echo '<h1 style="margin-top: 80px;">Gluten Free</h1>';
	
		while ( have_rows('winecider','option') ) : the_row();
		
			if( get_sub_field('item_active','option')):
		
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name','option');
				
				echo '</h3>';
					
				the_sub_field('description','option');
				
				$options = get_sub_field('avaliable_in','option');
				
				if( $options ):
				
					echo '<ul>';
					
					foreach( $options as $option ):
					
						echo '<li>';
						
						echo '<span class="';
						
						echo $option;
						
						echo '-icon"></span>';
						
						echo '</li>';
						
					endforeach;
					
					echo '</ul>';
					
				else :
				
					// nothing
					
				endif;
				
				echo '</div>';
				
			endif;

		endwhile;
		
		
		echo '<h1 style="margin-top: 80px;">Cans For Here</h1>';
	
		while ( have_rows('cansforhere','option') ) : the_row();
		
			if( get_sub_field('item_active','option')):
		
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name','option');
				
				echo '</h3>';
					
				the_sub_field('description','option');
				
				$options = get_sub_field('avaliable_in','option');
				
				if( $options ):
				
					echo '<ul>';
					
					foreach( $options as $option ):
					
						echo '<li>';
						
						echo '<span class="';
						
						echo $option;
						
						echo '-icon"></span>';
						
						echo '</li>';
						
					endforeach;
					
					echo '</ul>';
					
				else :
				
					// nothing
					
				endif;
				
				echo '</div>';
				
			endif;

		endwhile;
		
		
		
				
		echo '</div></div>';
	
	else :
	
		echo '<div class="col_6"><div class="content" id="on_tap">No Items</div></div>';
	
	endif;
	
	echo '</div></div></div>';
	
?>