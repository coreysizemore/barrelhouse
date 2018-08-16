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
								
								<div class="tap_it_form_wrapper">
									
									
									
									
									
									<form id="form3" name="form3" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="http://www.coreysizemore.com/barrelhouse/tap-it-tuesday-insert/">
  
									<?php
									
										if (!empty($_POST)) {
											
											echo '<label style="display: none;" class="desc" id="title12" for="Field12">ID</label>';
										
											echo '<input style="display: none;" id="Field12" name="Field12" type="text" class="field text medium" value="' . $_POST[num] . '" maxlength="255" tabindex="1" onkeyup="" placeholder="" />';
										
										}
									
									?>
									
									
									<label class="desc" id="title1" for="Field1">Tapper's Name<span id="req_1" class="req">*</span></label>
									
									
									<input id="Field1" name="Field1" type="text" class="field text medium" value="" maxlength="255" tabindex="2" onkeyup="" required placeholder="" />
									
									
									<label class="desc" id="title2" for="Field2">Holder's Name<span id="req_2" class="req">*</span></label>
									
									
									<input id="Field2" name="Field2" type="text" class="field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required placeholder="" />
									
									<?php
									
										if (!empty($_POST)) {
											
											echo '<label style="display: none;" class="desc" id="title3" for="Field3">Date</label>';
										
											echo '<input style="display: none;" id="Field3" name="Field3" type="text" class="field text medium" value="' . $_POST[select] . '" maxlength="255" tabindex="4" onkeyup="" placeholder="" />';
										
										}
									
									?>								
									
									<label class="desc" id="title10" for="Field10">Your Email<span id="req_10" class="req">*</span></label>
									
									
									<input id="Field10" name="Field10" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="5" placeholder="" required />
									
									
									<label class="desc" id="title5" for="Field5">Phone<span id="req_5" class="req">*</span></label>
									
									
									<input id="Field5" name="Field5" type="text" class="field text medium" value="" maxlength="255" tabindex="6" onkeyup="" required placeholder="" />
									
									
									<label class="desc" id="title6" for="Field6">Where are you from (City/State)?<span id="req_6" class="req">*</span></label>
									
									
									<input id="Field6" name="Field6" type="text" class="field text medium" value="" maxlength="255" tabindex="7" onkeyup=""       required placeholder="" />
									
									<label class="desc" id="title7" for="Field7">Have either of you ever participated in a Tap it Tuesday tapping?<span id="req_7" class="req">*</span></label>
									
									
									<textarea id="Field7" name="Field7" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="8" onkeyup="" placeholder="" required></textarea>
									
									<label class="desc" id="title8" for="Field8">Why do you want to? (In 50 words or less please.)<span id="req_8" class="req">*</span></label>
									
									
									<textarea id="Field8" name="Field8" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="9" onkeyup="" placeholder="" required></textarea>
									
									
									<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" onclick='javascript: return SubmitForm()' />
									
									
									<div class="hide" style="display: none;">
									<label for="comment">Do Not Fill This Out</label>
									<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
									<input type="hidden" id="idstamp" name="idstamp" value="T81QLAxsUqz5hgAD373cv+LMJZt3kS9VQbmXgY4HkCA=" />
									</div>
									
									</form>
									
									<div style="visibility:hidden">
										<iframe NAME="iframe1" WIDTH="40" HEIGHT="40"></iframe>
										<iframe NAME="iframe2" WIDTH="40" HEIGHT="40"></iframe>
									</div>
								
								</div>
								
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

<script type='text/javascript'>

	function SubmitForm() {
		
		var a = document.forms["form3"]["Field1"].value;
		var b = document.forms["form3"]["Field2"].value;
		var c = document.forms["form3"]["Field10"].value;
		var d = document.forms["form3"]["Field5"].value;
		var e = document.forms["form3"]["Field6"].value;
		var f = document.forms["form3"]["Field7"].value;
		var g = document.forms["form3"]["Field8"].value;
    
	    if (a == "") {
		    
	        alert("Tapper's Name must be filled out.");
	        
	        return false;
	        
	    } else if (b == "") {
		    
		    alert("Holder's Name must be filled out.");
	        
	        return false;
		    
		} else if (c == "") {
			
			alert("Your Email must be filled out.");
	        
	        return false;
			
		} else if (d == "") {
			
			alert("Phone must be filled out.");
	        
	        return false;
			
		} else if (e == "") {
			
			alert("Where are you from (City/State)? must be filled out.");
	        
	        return false;
			
		} else if (f == "") {
			
			alert("Have either of you ever participated in a Tap it Tuesday tapping? must be filled out.");
	        
	        return false;
			
		} else if (g == "") {
			
			alert("Why do you want to? (In 50 words or less please.) must be filled out.");
	        
	        return false;
	    
	    } else {
											
			document.form3.action='https://csdd.wufoo.com/forms/qrrs92y06cjiz3/#public';
			document.form3.target = "iframe2";
			document.form3.submit();
											    
			document.form3.action='http://www.coreysizemore.com/barrelhouse/tap-it-tuesday-insert/';
			document.form3.target = "_self";
			document.form3.submit();
	
			return true;
		
		}									
	}
									
</script>