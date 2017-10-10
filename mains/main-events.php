<?php
	
	/*
		@package WordPress
		@subpackage hoth
	*/
	 
?>

<div class="main <?php echo basename(get_permalink()); ?> ">
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
					
					<div class="col_12">
								
						<div class="content">
					
							<?php get_template_part( 'loops/loop', 'page' ); ?>
									
						</div>
								
					</div>
						
				</div>
				
			</div>
			
		</div>
		
</div>
		
	
