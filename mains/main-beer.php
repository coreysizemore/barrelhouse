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
		
			echo '<div class="col_4 first"><div class="content" id="on_tap"></div></div>';
				
		endif;
		
		if( have_rows('bottle_sales_list') ):
		
			echo '<div class="col_4 first"><div class="content" id="on_tap">';
		
			echo '<h1>Bottle Sales</h1>';
			
			echo '<p>All 750ml Cork & Caged</p>';
			
			while ( have_rows('bottle_sales_list') ) : the_row();
			
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
	
			endwhile;
					
			echo '</div></div>';
		
		else :
		
			echo '<div class="col_4"><div class="content" id="on_tap"></div></div>';
		
		endif;
		
		if( have_rows('on_tap_now') ):
		
			echo '<div class="col_4 last"><div class="content" id="on_tap">';
		
			echo '<h1>Live From the Barrel</h1>';
			
			echo '<p>Cask Beers on tap Now:</p>';
			
			
			
			while ( have_rows('on_tap_now') ) : the_row();
			
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
			
			while ( have_rows('next_weeks_barrel') ) : the_row();
			
				if( get_sub_field('item_active')):
				
					echo '<p style="margin-top: 40px;">Next Weeks Barrel:</p>';
			
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
			
			echo '<h1 style="margin-top: 80px;">Blenders Reserve Taps</h1>';
			
			echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade</p>';
						
			while ( have_rows('blenders_reserve_taps') ) : the_row();
			
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
			
			
			
			while ( have_rows('on_nitro') ) : the_row();
			
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
			
			echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade</p>';
			
			while ( have_rows('guest_tap') ) : the_row();
			
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
			
			echo '<h1 style="margin-top: 80px;">Wine & Cider</h1>';
		
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
					
			echo '</div></div>';
		
		else :
		
			echo '<div class="col_4 last"><div class="content" id="on_tap"></div></div>';
		
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
	