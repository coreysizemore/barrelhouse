<?php
	
	get_header();
	
	/*
		@package WordPress
		@subpackage hoth
		Template Name: Page - Beer
	*/
	 
?>

<?php get_template_part( 'headers/header', 'page' ); ?>

<?php get_template_part( 'mains/main', 'beer' ); ?>

<?php get_footer(); ?>