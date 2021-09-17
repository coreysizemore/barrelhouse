<?php
	
	echo '<div class="bottle_sales_wrapper"><div class="container"><div class="row gutters">';

	if( have_rows('bottle_sales_list', 'option') ):

		echo '<div class="col_6"><div class="content" id="on_tap">';
	
		echo '<h1>750ml Bottle Sales</h1>';
		
		echo '<p>All 750ml Cork & Caged</p>';
		
		
		
		while ( have_rows('bottle_sales_list', 'option') ) : the_row();
		
			if (get_sub_field('bottle_size') == '750'):
		
				if( get_sub_field('item_active')):
			
					echo '<div class="tap_item">';
					
					echo '<img src="';
					
					the_sub_field('bottle_image');
					
					echo '" />';
				
					echo '<h3 class="tap_title">';
			        
					the_sub_field('name');
					
					echo '</h3>';
						
					the_sub_field('description');
					
					$options = get_sub_field('available_at');
					
					if( $options ):
					
						echo '<ul>';
						
						foreach( $options as $option ):
						
							echo '<li>';
							
							if ($option == 'inhouse'):
							
								echo 'In House&nbsp;';
								
							endif;
							
							if ($option == 'retailer'):
							
								echo ' or <a href="#">Local Retailer</a>';
								
							endif;
	
							echo '</li>';
							
						endforeach;
						
						echo '</ul>';
						
					else :
					
						// nothing
						
					endif;
					
					echo '</div>';
					
				endif;
			
			endif;

		endwhile;
		
		
				
		echo '</div></div>';
		
		echo '<div class="col_6"><div class="content" id="on_tap">';
	
		echo '<h1>500ml Bottle Sales</h1>';
		
		echo '<p>All 500ml Cork & Caged</p>';
		
		
		
		while ( have_rows('bottle_sales_list', 'option') ) : the_row();
		
			if (get_sub_field('bottle_size') == '500'):
		
				if( get_sub_field('item_active')):
			
					echo '<div class="tap_item">';
					
					echo '<img src="';
					
					the_sub_field('bottle_image');
					
					echo '" />';
				
					echo '<h3 class="tap_title">';
			        
					the_sub_field('name');
					
					echo '</h3>';
						
					the_sub_field('description');
					
					$options = get_sub_field('available_at');
					
					if( $options ):
					
						echo '<ul>';
						
						foreach( $options as $option ):
						
							echo '<li>';
							
							if ($option == 'inhouse'):
							
								echo 'In House&nbsp;';
								
							endif;
							
							if ($option == 'retailer'):
							
								echo ' or <a href="#">Local Retailer</a>';
								
							endif;
	
							echo '</li>';
							
						endforeach;
						
						echo '</ul>';
						
					else :
					
						// nothing
						
					endif;
					
					echo '</div>';
					
				endif;
			
			endif;

		endwhile;
		
		
		
		
		
		echo '<br/><br /><br /><h1>250ml Can Sales</h1>';
		
		
		
		while ( have_rows('bottle_sales_list', 'option') ) : the_row();
		
			if (get_sub_field('bottle_size') == '250'):
		
				if( get_sub_field('item_active')):
			
					echo '<div class="tap_item">';
					
					echo '<img src="';
					
					the_sub_field('bottle_image');
					
					echo '" />';
				
					echo '<h3 class="tap_title">';
			        
					the_sub_field('name');
					
					echo '</h3>';
						
					the_sub_field('description');
					
					$options = get_sub_field('available_at');
					
					if( $options ):
					
						echo '<ul>';
						
						foreach( $options as $option ):
						
							echo '<li>';
							
							if ($option == 'inhouse'):
							
								echo 'In House&nbsp;';
								
							endif;
							
							if ($option == 'retailer'):
							
								echo ' or <a href="#">Local Retailer</a>';
								
							endif;
	
							echo '</li>';
							
						endforeach;
						
						echo '</ul>';
						
					else :
					
						// nothing
						
					endif;
					
					echo '</div>';
					
				endif;
			
			endif;

		endwhile;
		
		
		
		echo '<br/><br /><br /><h1>16oz Can Sales</h1>';
		
		
		
		
		
		while ( have_rows('bottle_sales_list', 'option') ) : the_row();
		
			if (get_sub_field('bottle_size') == 'can'):
		
				if( get_sub_field('item_active')):
			
					echo '<div class="tap_item">';
					
					echo '<img src="';
					
					the_sub_field('bottle_image');
					
					echo '" />';
				
					echo '<h3 class="tap_title">';
			        
					the_sub_field('name');
					
					echo '</h3>';
						
					the_sub_field('description');
					
					$options = get_sub_field('available_at');
					
					if( $options ):
					
						echo '<ul>';
						
						foreach( $options as $option ):
						
							echo '<li>';
							
							if ($option == 'inhouse'):
							
								echo 'In House&nbsp;';
								
							endif;
							
							if ($option == 'retailer'):
							
								echo ' or <a href="#">Local Retailer</a>';
								
							endif;
	
							echo '</li>';
							
						endforeach;
						
						echo '</ul>';
						
					else :
					
						// nothing
						
					endif;
					
					echo '</div>';
					
				endif;
			
			endif;

		endwhile;
		
		
		
		echo '<br/><br /><br /><h1>12oz Can Sales</h1>';
		
		
		
		
		
		while ( have_rows('bottle_sales_list', 'option') ) : the_row();
		
			if (get_sub_field('bottle_size') == 'can2'):
		
				if( get_sub_field('item_active')):
			
					echo '<div class="tap_item">';
					
					echo '<img src="';
					
					the_sub_field('bottle_image');
					
					echo '" />';
				
					echo '<h3 class="tap_title">';
			        
					the_sub_field('name');
					
					echo '</h3>';
						
					the_sub_field('description');
					
					$options = get_sub_field('available_at');
					
					if( $options ):
					
						echo '<ul>';
						
						foreach( $options as $option ):
						
							echo '<li>';
							
							if ($option == 'inhouse'):
							
								echo 'In House&nbsp;';
								
							endif;
							
							if ($option == 'retailer'):
							
								echo ' or <a href="#">Local Retailer</a>';
								
							endif;
	
							echo '</li>';
							
						endforeach;
						
						echo '</ul>';
						
					else :
					
						// nothing
						
					endif;
					
					echo '</div>';
					
				endif;
			
			endif;

		endwhile;

		
		
					
		echo '</div></div>';
	
	else :
	
		echo '<div class="col_12"><div class="content" id="on_tap"><p>No Items</p></div></div>';
	
	endif;
	
	echo '</div></div></div>';

?>