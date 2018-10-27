<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<div id="main" class="<?php echo basename(get_permalink()); ?> ">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
					
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
									
									date_default_timezone_set('America/Los_Angeles');
									
									$todaysdate = idate('U') + 28800;
									
									//$todaysdate = 1541577600 + 28800;
									
									//$todaysdate = 1542182400 + 28800;
	
									$sql = "SELECT * FROM tap_it";
									
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
									    
									    while($row = $result->fetch_assoc()) {
										    
										    $lastdate = $row["date"];
										    
										    $date = $lastdate;
										    
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
									
									$lid = 0;
									
									if ($result->num_rows > 0) {
									    
									    while($row = $result->fetch_assoc()) {
										    
										    $lastid = $row["id"];
										    
										    if ($lastid > $lid) {
											    
											    $lid = $lastid;
											    
											    $lastdate = $row["date"];
											    
										    }
										    
										    $z++;
										    
										}
										
									} else {
										
										$lastdate = 1540882800 + 28800;
										
									}
									
									$howmany = 10 - $z;
									
									$date = $lastdate;
								
									for ($x = 0; $x < $howmany; $x++) {
										
										$date = $date + 604800;
										
										$sql = "INSERT INTO tap_it (approved, date, tapper, holder, location) VALUES ('No', '$date', '', '', '')";
										
										if ($conn->query($sql) === TRUE) {
											    
										} else {
												
											echo "Error: " . $sql . "<br>" . $conn->error;
											
										}
										
									}
									
									// display table
									
									$sql = "SELECT * FROM tap_it ORDER BY id ASC";
									
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
										
									    echo '<div class="tap_it_table_wrapper">';
									    
									    while($row = $result->fetch_assoc()) {
										    
										    $databasedate = $row["date"];
											    
											$displaydate = date('m/d/Y', substr($databasedate, 0, 10));
										    
										    if ($row["approved"] == 'Yes') {
											    
											    echo '<div class="table_row">';
										    
											    echo '<span>' . $displaydate . '</span>';
											    
											    echo '<span><strong>Tapper:</strong> ' . $row["tapper"] . '</span>';
											    
											    echo '<span><strong>Holder:</strong> ' . $row["holder"] . '</span>';
											    
										        echo '<span><strong>Location:</strong> ' . $row["location"] . '</span>';
										        
										        echo '</div>';
											    
										    } else if ($row["tapper"] == '') {
											    
											    echo '<div class="table_row empty">';
										    
											    echo '<span>' . $displaydate . '</span>';
											    
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