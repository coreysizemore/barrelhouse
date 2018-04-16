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
		
		if( have_rows('eventschedule') ):
			
			echo '<div class="col_12"><div class="content" id="schedule_list">';
			
			echo '<h1>';
			
			the_field('heading');
			
			echo '</h1>';
			
			echo '<p>';
			
			the_field('description');
			
			echo '</p>';
						
			while ( have_rows('eventschedule') ) : the_row();
			
				if (get_sub_field('tapper')):
			
					echo '<div class="schedule_item">';
					
					echo '<span class="schedule_date"><strong>';

					the_sub_field('date');
	
					echo '</strong></span>';
					
					echo '<span class="schedule_tapper"><strong>Tapper: </strong>';
						
					the_sub_field('tapper');
					
					echo '</span>';
					
					echo '<span class="schedule_holder"><strong>Holder: </strong>';
						
					the_sub_field('holder');
					
					echo '</span>';
					
					echo '<span class="schedule_from"><strong>From: </strong>';
						
					the_sub_field('from');
					
					echo '</span></div>';
				
				else :
				
					echo '<a href="http://www.coreysizemore.com/barrelhouse/tap-tuesday-sign/"><div class="schedule_item avail">';
					
					echo '<span class="schedule_date"><strong>';

					the_sub_field('date');
	
					echo '</strong></span>';
					
					echo '<span class="schedule_tapper"><strong>Space Available</strong></span></div></a>';
					
				endif;
	
			endwhile;
					
			echo '</div></div>';
							
		else :
		
			echo '<div class="col_12"><div class="content" id="retailer_list">No Schedule Items</div></div>';
				
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
	