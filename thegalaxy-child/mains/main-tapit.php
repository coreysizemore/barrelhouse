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
							
									$youtube = get_field('youtube');
														
									if( $youtube ):
									
										echo '<div class="youtube_wrapper">';
									
										shuffle($youtube);
																	
										foreach( $youtube as $yt ):
										
												echo '<div class="youtube_item">';
											
												echo $yt['embed_code'];
												
												echo '</div>';
																							
										endforeach;
										
										echo '</div>';
																	
									else :
														
										//do nothing
																	
									endif;
																			
								?>
								
								
								
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
									
									// delete anything that has expired
									
									$todaysdate = date('m/d/Y');
	
									$sql = "SELECT * FROM tap_it";
									
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
									    
									    while($row = $result->fetch_assoc()) {
										    
										    $lastdate = $row["date"];
										    
										    $date = date_create($lastdate);
										    
										    if ($lastdate < $todaysdate) {
											    
											    $sql = 'DELETE FROM tap_it WHERE id = ' . $row["id"];
											    
											    if ($conn->query($sql) === TRUE) {
														    
												} else {
															
													echo "Error: " . $sql . "<br>" . $conn->error;
														
												}
											    
										    }
										    
										}
										
									}
									
									// create new rows if less then 10 exist
									
									$sql = "SELECT * FROM tap_it";
	
									$result = $conn->query($sql);
									
									$z = 0;
									
									if ($result->num_rows > 0) {
									    
									    while($row = $result->fetch_assoc()) {
										    
										    $lastdate = $row["date"];
										    
										    $z++;
										    
										}
										
									}
									
									$howmany = 10 - $z;
									
									$todaysdate = date('m/d/Y');
									
									$date = date_create($lastdate);
								
									for ($x = 0; $x < $howmany; $x++) {
										
										date_add($date, date_interval_create_from_date_string('7 days'));
											
										$newdate = date_format($date, 'm/d/Y');
										
										$sql = "INSERT INTO tap_it (approved, date, tapper, holder, location) VALUES ('No', '$newdate', '', '', '')";
										
										if ($conn->query($sql) === TRUE) {
											    
										} else {
												
											echo "Error: " . $sql . "<br>" . $conn->error;
											
										}
										
									}
									
									// display table
									
									$sql = "SELECT * FROM tap_it";
									
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
										
									    echo '<div class="tap_it_table_wrapper">';
									    
									    while($row = $result->fetch_assoc()) {
										    
										    if ($row["approved"] == 'Yes') {
											    
											    echo '<div class="table_row">';
										    
											    echo '<span>' . $row["date"] . '</span>';
											    
											    echo '<span><strong>Tapper:</strong> ' . $row["tapper"] . '</span>';
											    
											    echo '<span><strong>Holder:</strong> ' . $row["holder"] . '</span>';
											    
										        echo '<span><strong>Location:</strong> ' . $row["location"] . '</span>';
										        
										        echo '</div>';
											    
										    } else if ($row["tapper"] == '') {
											    
											    echo '<div class="table_row empty">';
										    
											    echo '<span>' . $row["date"] . '</span>';
											    
											    echo '<span><form action="' . get_home_url() . '/tap-it-tuesday-submission/" method="post"><input type="text" name="num" style="display: none;" value="' . $row["id"] . '" /><input type="text" name="select" style="display: none;" value="' . $row["date"] . '" /><input type="submit" value="Space Available, Click Here" /></form></span></span>';
										        
										        echo '</div>';
											    
										    }
									        
									    }
									    
									    echo '</div>';
									    
									} else {
										
									    echo "There are 0 results.";
									    
									}
									
									if(is_user_logged_in()):
									
										echo '<a class="admin_button" href="http://www.coreysizemore.com/barrelhouse/tap-it-tuesday-admin/">Admin Access</a>';
									
									endif;
									
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