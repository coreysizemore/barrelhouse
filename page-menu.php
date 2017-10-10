<?php
	
	get_header();
	
	/*
		@package WordPress
		@subpackage hoth
		Template Name: Page - Menu
	*/
	 
?>

<?php get_template_part( 'headers/header', 'page' ); ?>

<?php get_template_part( 'mains/main', 'menu' ); ?>

<?php get_footer(); ?>