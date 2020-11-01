<?php
/**
 * This file adds the Landing template to the Blog Pro Theme.
 *
 * @author Vishal Jain
 * @package Blog Pro
 * @subpackage Customizations
 */

/*
Template Name: Landing
*/

//* Add landing body class to the head
add_filter( 'body_class', 'blog_pro_add_body_class' );
function blog_pro_add_body_class( $classes ) {

	$classes[] = 'blog-pro-landing';
	return $classes;

}

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Remove site header elements
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

//* Remove site description
remove_action( 'genesis_before_content_sidebar_wrap', 'genesis_seo_site_description' );

//* Remove navigation
remove_action( 'genesis_header', 'genesis_do_nav', 12 );
remove_action( 'genesis_footer', 'genesis_do_subnav', 12 );

//* Remove Blog Pro page title
remove_action( 'genesis_before_content_sidebar_wrap', 'blog_pro_page_title' );

//* Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs');

//* Remove site footer widgets
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

//* Remove site footer elements
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//* Run the Genesis loop
genesis();
