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
						
						<div class="col_8 first">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'page' ); ?>
									
							</div>
								
						</div>
							
						<div class="col_4 last">
							
							<div class="content">
								
								<div class="kitchen_menu">
								
									<?php
		
										if( have_rows('limited_kitchen_creations') ):
										
											echo '<h2>Limited Kitchen Creations</h2>';
														
											while ( have_rows('limited_kitchen_creations') ) : the_row();
											
												echo '<div class="kitchen_item">';
											
												echo '<h4>';
										        
												the_sub_field('name');
												
												echo '</h4>';
													
												the_sub_field('description');
												
												echo '</div>';
									
											endwhile;
															
										else :
												
										endif;
										
									?>
								
								</div>
							
							</div>
								
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
					
						<div class="col_4 first">
								
							<div class="content">
								
								<div class="kitchen_menu">
								
									<?php
		
										if( have_rows('limited_kitchen_creations') ):
										
											echo '<h2>Limited Kitchen Creations</h2>';
														
											while ( have_rows('limited_kitchen_creations') ) : the_row();
											
												echo '<div class="kitchen_item">';
											
												echo '<h4>';
										        
												the_sub_field('name');
												
												echo '</h4>';
													
												the_sub_field('description');
												
												echo '</div>';
									
											endwhile;
															
										else :
												
										endif;
										
									?>
								
								</div>
							
							</div>
							
						</div>
						
						<div class="col_8 last">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
	
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
	