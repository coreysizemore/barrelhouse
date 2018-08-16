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
							
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
		
									echo '<div class="container"><div class="row gutters">';
									
									if( have_rows('on_tap_list', 'option') ):
										
										echo '<div class="col_6"><div class="content" id="on_tap">';
										
										echo '<h1>On Tap</h1>';
										
										echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade</p>';
													
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
									
										echo '<h1>Live From the Barrel</h1>';
										
										echo '<p>Cask Beers on tap Now:</p>';
										
										
										
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
										
										echo '<p>Available In:<br /><span class="bottle-icon"></span> Bottle, <span class="growler-icon"></span> Growler, <span class="grenade-icon"></span> Grenade</p>';
										
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
												
										echo '</div></div>';
									
									else :
									
										echo '<div class="col_6"><div class="content" id="on_tap">No Items</div></div>';
									
									endif;
									
									echo '</div></div>';
									
								?>
								
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
	
	