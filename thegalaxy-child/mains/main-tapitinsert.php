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
									
									if (!empty($_POST)) {
	
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
										
										// insert tapper information into table
										
										$sql = "UPDATE tap_it SET approved = 'No', tapper = '$_POST[Field1]', holder = '$_POST[Field2]', location = '$_POST[Field6]' WHERE id = '$_POST[Field12]'";
				
										if ($conn->query($sql) === TRUE) {
												
											echo "<div class='approved_wrapper'><p>Thank you for your Tap It Tuesday request. We will evaluate your request and you will recieve a confirmation email if accepted. You can navigate back to the Tap It Tuesday page using the button below.</p><a href='http://www.coreysizemore.com/barrelhouse/tap-it-tuesday/'>Return to Tap It Tuesday</a></div>";
											    
										} else {
												
											echo "Error: " . $sql . "<br>" . $conn->error;
											
										}
										
										$conn->close();
									
									}
									
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

