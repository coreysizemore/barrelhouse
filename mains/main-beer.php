<?php
	
	/*
		@package WordPress
		@subpackage hoth
	*/
	 
?>

<div class="main <?php echo basename(get_permalink()); ?> ">

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_9 first">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'page' ); ?>
									
							</div>
								
						</div>
							
						<div class="col_3 last">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3 first">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_9 last">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
	
	<?php
		
		echo '<div class="container"><div class="row gutters">';
		
		if( have_rows('on_tap_list') ):
			
			echo '<div class="col_4 first"><div class="content" id="on_tap">';
			
			echo '<h1>On Tap</h1>';
			
			echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade</p>';
						
			while ( have_rows('on_tap_list') ) : the_row();
			
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
				
					echo 'Not Currently Available';
					
				endif;
				
				echo '</div>';
	
			endwhile;
					
			echo '</div></div>';
							
		else :
		
			echo '<div class="col_4 first"><div class="content" id="on_tap">Nothing On Tap</div></div>';
				
		endif;
		
		if( have_rows('bottle_sales_list') ):
		
			echo '<div class="col_4 first"><div class="content" id="on_tap">';
		
			echo '<h1>Bottle Sales</h1>';
			
			echo '<p>All 750ml Cork & Caged</p>';
			
			while ( have_rows('bottle_sales_list') ) : the_row();
			
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
				
					echo 'Not Currently Available';
					
				endif;
				
				echo '</div>';
	
			endwhile;
					
			echo '</div></div>';
		
		else :
		
			echo '<div class="col_4"><div class="content" id="on_tap">Nothing For Sale</div></div>';
		
		endif;
		
		if( have_rows('on_tap_now') ):
		
			echo '<div class="col_4 last"><div class="content" id="on_tap">';
		
			echo '<h1>Live From the Barrel</h1>';
			
			echo '<p>Cask Beers on tap Now:</p>';
			
			while ( have_rows('on_tap_now') ) : the_row();
			
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				echo '</div>';
	
			endwhile;
			
			echo '<p style="margin-top: 40px;">Next Weeks Barrel:</p>';
			
			while ( have_rows('next_weeks_barrel') ) : the_row();
			
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				echo '</div>';
	
			endwhile;
			
			echo '<h1 style="margin-top: 80px;">Blenders Reserve Taps</h1>';
			
			echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade</p>';
						
			while ( have_rows('blenders_reserve_taps') ) : the_row();
			
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
				
					echo 'Not Currently Available';
					
				endif;
				
				echo '</div>';
	
			endwhile;
			
			echo '<h1 style="margin-top: 80px;">On Nitro!</h1>';
			
			while ( have_rows('on_nitro') ) : the_row();
			
				echo '<div class="tap_item">';
			
				echo '<h3 class="tap_title">';
		        
				the_sub_field('name');
				
				echo '</h3>';
					
				the_sub_field('description');
				
				echo '</div>';
	
			endwhile;
					
			echo '</div></div>';
		
		else :
		
			echo '<div class="col_4 last"><div class="content" id="on_tap">Nothing Column 3</div></div>';
		
		endif;
		
		echo '</div></div>';
		
	?>
	
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

<?php if( get_field('parallax_feature')): ?>

	<?php if( get_field('parallax_image') ): ?>

		<div class="parallax parallax-page" data-stellar-background-ratio="0.15" style="background-image: url(<?php the_field('parallax_image'); ?>)">
	
			<?php
		
				if(get_field('parallax_content'))
				{
					echo '<div class="filter">' . get_field('parallax_content') . '</div>';
				}
											
			?>
	
		</div>
	
	<?php else : ?>
	
		<div class="parallax parallax-page parallax_default_image" data-stellar-background-ratio="0.15">
			
			<?php
		
				if(get_field('parallax_content'))
				{
					echo '<div class="filter">' . get_field('parallax_content') . '</div>';
				}
											
			?>
			
		</div>
	
	<?php endif; ?>

<?php endif; ?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>
	