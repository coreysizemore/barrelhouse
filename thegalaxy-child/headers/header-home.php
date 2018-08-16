<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php if( get_field('display_search', 'options')): ?>

	<?php get_search_form(); ?>

<?php endif; ?>

<?php
	
	if( get_field('member_login_bar', 'options') ):
	
		if(is_user_logged_in()):
		
			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;
			$username = $current_user->user_login;
				 
			if($display_name):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>Logged in as <span>';
				 
				echo $display_name;
				 	
				echo '</span><a href="';
				
				echo wp_logout_url( home_url() );
				
				echo '">Logout</a><span></div></div></div></div></div>';
				 	
			elseif($username):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>';
				 
				echo $username;
				 	
				echo '<span></div></div></div></div></div>';
				 
			else:	
				 	
			endif;
		
		else:
		
			echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span><a href="';
			
			echo home_url('wp-admin');
				
			echo '">Member Login</a><span></div></div></div></div></div>';
			
		endif;
	
	endif;
		 
?>

<?php

	if( get_field('home_selection', 'options') == 'full' ):
	
		echo '<header data-stellar-background-ratio="0.9" class="header_home home_default_image">';	
			
	elseif( get_field('home_selection', 'options') == 'fixed' ):
		
		echo '<header data-stellar-background-ratio="0.9" class="header_home home_default_image fixed_height">';
		
	elseif( get_field('home_selection', 'options') == 'slide' ):
	
		echo '<header class="header_home home_default_image slideshow"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div data-stellar-background-ratio="0.9" class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div data-stellar-ratio="0.75" class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
		
	elseif( get_field('home_selection', 'options') == 'slidefix' ):
	
		echo '<header class="header_home home_default_image slideshow slideshow_fixed"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div data-stellar-background-ratio="0.9" class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div data-stellar-ratio="0.75" class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
			
	endif;

?>

<?php 
	
	if( get_field('imageslideshow_overlay', 'options') ):
	
		echo '<div class="image_overlay"></div>';
	
	endif;
	
?>
	
	<?php get_template_part( 'sidebars/sidebar' , 'contact-information' ); ?>
	
	<?php
		
		if( get_field('navigation_location', 'options') == 'top' ):
		
		echo '<div id="nav_bar" class="top_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'bottom' ):
		
		echo '<div id="nav_bar" class="bottom_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'left' ):
		
		echo '<div id="nav_bar" class="left_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'right' ):
		
		echo '<div id="nav_bar" class="right_navigation">';
		
		endif;
		
	?>
		
		<div class="container">
			
			<div class="row gutters">
		
				<div class="col_2">
				
					<?php get_template_part( 'logos/logo', 'main' ); ?>
				
				</div>
				
				<?php
		
					if( get_field('header_social_location', 'options') == 'both' ):
					
					echo '<div class="col_8">';
					
					echo get_template_part( 'navs/nav', 'main' );
					
					echo '</div><div class="col_2">';
					
					echo get_template_part( 'navs/nav', 'social' );
					
					echo '</div>';
					
					elseif( get_field('header_social_location', 'options') == 'topbar' ):
					
					echo '<div class="col_10">';
					
					echo get_template_part( 'navs/nav', 'main' );
					
					echo '</div>';
					
					elseif( get_field('header_social_location', 'options') == 'mainbar' ):
					
					echo '<div class="col_8">';
					
					echo get_template_part( 'navs/nav', 'main' );
					
					echo '</div><div class="col_2">';
					
					echo get_template_part( 'navs/nav', 'social' );
					
					echo '</div>';
					
					elseif( get_field('header_social_location', 'options') == 'none' ):
					
					echo '<div class="col_10">';
					
					echo get_template_part( 'navs/nav', 'main' );
					
					echo '</div>';
					
					endif;
					
				?>
				
			</div>
			
		</div>
		
	</div>
	
	<?php if( get_field('home_logo','options') != 'none'): ?>
	
		<?php if( get_field('home_logo_location', 'options') == 'left' ): ?>
		
			<div id="home_logo" class="home_logo_left" data-stellar-ratio="0.75">
			
		<?php endif; ?>
		
		<?php if( get_field('home_logo_location', 'options') == 'center' ): ?>
		
			<div id="home_logo" class="home_logo_center" data-stellar-ratio="0.90">
			
		<?php endif; ?>
		
		<?php if( get_field('home_logo_location', 'options') == 'right' ): ?>
		
			<div id="home_logo" class="home_logo_right" data-stellar-ratio="0.75">
			
		<?php endif; ?>
			
			<?php get_template_part( 'logos/logo', 'home' ); ?>
			
			<div id="home_page_nav">
				
				<?php wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) ); ?>	
				
			</div>
		
		</div>
		
	<?php else : ?>
			
		<?php if ( has_nav_menu( 'home_page_nav' ) ): ?>
		
			<?php if( get_field('home_logo_location', 'options') == 'left' ): ?>
		
				<div id="home_logo" class="home_logo_left" data-stellar-ratio="0.75">
				
			<?php endif; ?>
			
			<?php if( get_field('home_logo_location', 'options') == 'center' ): ?>
			
				<div id="home_logo" class="home_logo_center" data-stellar-ratio="0.75">
				
			<?php endif; ?>
			
			<?php if( get_field('home_logo_location', 'options') == 'right' ): ?>
			
				<div id="home_logo" class="home_logo_right" data-stellar-ratio="0.75">
				
			<?php endif; ?>
			
				<div id="home_page_nav">
					
					<?php wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) ); ?>
					
				</div>
			
			</div>
			     
		<?php endif; ?>

	<?php endif; ?>
	
</header>

<header class="header_mobile_home home_default_image">
	
	<?php get_template_part( 'navs/nav', 'mobile' ); ?>
	
	<?php 
	
		if( get_field('imageslideshow_overlay', 'options') ):
		
			echo '<div class="image_overlay"></div>';
		
		endif;
		
	?>
	
	<?php if( get_field('home_logo','options') != 'none'): ?>
	
	<div id="home_logo">
		
		<?php get_template_part( 'logos/logo', 'home' ); ?>
		
		<div id="home_page_nav">
			
			<?php wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) ); ?>
			
		</div>
	
	</div>
	
	<?php else : ?>
	
	<?php if ( has_nav_menu( 'home_page_nav' ) ): ?>
		
		<div id="home_logo">
		
			<div id="home_page_nav">
			
				<?php wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) ); ?>
				
			</div>
			
		</div>
		
		<?php endif; ?>
	
	<?php endif; ?>
	
</header>