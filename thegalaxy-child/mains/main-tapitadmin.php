<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php if(is_user_logged_in()):?>

<div id="main" class="<?php echo basename(get_permalink()); ?> ">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>

	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					
									
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
										
									$sql = "SELECT * FROM tap_it ORDER BY id ASC";
	
									$result = $conn->query($sql);
										
									if ($result->num_rows > 0) {
											
										echo '<div class="tap_it_table_wrapper admin">';
										    
										while($row = $result->fetch_assoc()) {
											
											$databasedate = $row["date"];
											    
											$displaydate = date('m/d/Y', substr($databasedate, 0, 10));
											    
											if ($row["approved"] == 'No') {
												    
												echo '<div class="table_row">';
												    
												echo '<span><form action="' . get_home_url() . '/tap-it-tuesday-approve/" method="post"><input type="text" name="num" style="display: none;" value="' . $row["id"] . '" /><input type="submit" value="Approve" /></form> | <form action="' . get_home_url() . '/tap-it-tuesday-unapprove/" method="post"><input type="text" name="num" style="display: none;" value="' . $row["id"] . '" /><input type="submit" value="Deny" /></form></span>';
											    
												echo '<span><strong>' . $displaydate . '</strong></span>';
												    
												echo '<span><strong>Tapper:</strong> ' . $row["tapper"] . '</span>';
												    
												echo '<span><strong>Holder:</strong> ' . $row["holder"] . '</span>';
												    
											    echo '<span><strong>Location:</strong> ' . $row["location"] . '</span>';
											        
											    echo '</div>';
												    
											} else {
												    
												echo '<div class="table_row approved">';
												    
												echo '<span>Approved | <form action="' . get_home_url() . '/tap-it-tuesday-unapprove/" method="post"><input type="text" name="num" style="display: none;" value="' . $row["id"] . '" /><input type="submit" value="Deny" /></form></span>';
											    
												echo '<span><strong>' . $displaydate . '</strong></span>';
												    
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
								
								
								
							</div>
							
						</div>

						
				</div>
				
			</div>
			
		</div>

		
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

<?php endif; ?>