<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php
	
	if( get_field('secondary_navigation') ):
	
		if ( has_nav_menu( 'secondary_nav' ) ):
		
	    	echo get_template_part( 'navs/nav', 'secondary' );
	    	    	
	    endif;
    
    endif;
    
?>

<?php 
	
	if( get_field('display_call_out_boxes') ):

		get_template_part( 'misc/calloutboxes' );
		
	endif;
		
?>

<div class="main <?php echo basename(get_permalink()); ?> ">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_8">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
									
							</div>
								
						</div>
							
						<div class="col_4">
								
							<div class="content">
								
								<div class="kitchen_menu">
								
									<?php
		
										if( have_rows('limited_kitchen_creations', 'option') ):
										
											echo '<h2>Limited Kitchen Creations</h2>';
														
											while ( have_rows('limited_kitchen_creations', 'option') ) : the_row();
											
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
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_9">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
								
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

	
<?php get_template_part( 'misc/parallax' ); ?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>
	
	