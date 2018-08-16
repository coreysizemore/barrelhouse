<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php if(is_user_logged_in()):?>

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

									$servername = "localhost";
									$username = "bh_tap_it_user";
									$password = "eF0VVZf85Zd";
									$dbname = "barrel_house_tap_it";
									
									// Create connection
										
									$conn = new mysqli($servername, $username, $password, $dbname);
										
									// Check connection
										
									if ($conn->connect_error) {
											
										die("Connection failed: " . $conn->connect_error);
										    
									}
										
									// manage listings
										
									$sql = "SELECT * FROM tap_it";
	
									$result = $conn->query($sql);
										
									if ($result->num_rows > 0) {
											
										echo '<div class="tap_it_table_wrapper admin">';
										    
										while($row = $result->fetch_assoc()) {
											    
											if ($row["approved"] == 'No') {
												    
												echo '<div class="table_row">';
												    
												echo '<span><form action="' . get_home_url() . '/tap-it-tuesday-approve/" method="post"><input type="text" name="num" style="display: none;" value="' . $row["id"] . '" /><input type="submit" value="Approve" /></form> | <form action="' . get_home_url() . '/tap-it-tuesday-unapprove/" method="post"><input type="text" name="num" style="display: none;" value="' . $row["id"] . '" /><input type="submit" value="Deny" /></form></span>';
											    
												echo '<span><strong>' . $row["date"] . '</strong></span>';
												    
												echo '<span><strong>Tapper:</strong> ' . $row["tapper"] . '</span>';
												    
												echo '<span><strong>Holder:</strong> ' . $row["holder"] . '</span>';
												    
											    echo '<span><strong>Location:</strong> ' . $row["location"] . '</span>';
											        
											    echo '</div>';
												    
											} else {
												    
												echo '<div class="table_row approved">';
												    
												echo '<span>Approved | <form action="' . get_home_url() . '/tap-it-tuesday-unapprove/" method="post"><input type="text" name="num" style="display: none;" value="' . $row["id"] . '" /><input type="submit" value="Deny" /></form></span>';
											    
												echo '<span><strong>' . $row["date"] . '</strong></span>';
												    
												echo '<span><strong>Tapper:</strong> ' . $row["tapper"] . '</span>';
												    
												echo '<span><strong>Holder:</strong> ' . $row["holder"] . '</span>';
												    
											    echo '<span><strong>Location:</strong> ' . $row["location"] . '</span>';
											        
											    echo '</div>';
												    
											}
										        
										}
										    
										echo '</div>';
										    
									} else {
											
										echo "There are 0 results.";
										    
									}
									
									echo '<a class="admin_button" href="http://www.coreysizemore.com/barrelhouse/tap-it-tuesday/">Tap It Tuesday</a>';
										
									$conn->close();
									
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

<?php else : ?>

	<?php get_template_part( 'misc/loggedout' ); ?>

<?php endif; ?>