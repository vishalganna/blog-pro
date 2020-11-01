<?php

//* Blog Pro Theme Setting Defaults
add_filter( 'genesis_theme_settings_defaults', 'blog_pro_theme_defaults' );
function blog_pro_theme_defaults( $defaults ) {

	$defaults['blog_cat_num']              = 5;
	$defaults['content_archive']           = 'excerpt';
	$defaults['content_archive_limit']     = 200;
	$defaults['content_archive_thumbnail'] = 0;
	$defaults['image_alignment']           = 'aligncenter';
	$defaults['posts_nav']                 = 'numeric';
	$defaults['site_layout']               = 'content-sidebar';

	return $defaults;

}

//* Blog Pro Theme Setup
add_action( 'after_switch_theme', 'blog_pro_theme_setting_defaults' );
function blog_pro_theme_setting_defaults() {

	if( function_exists( 'genesis_update_settings' ) ) {

		genesis_update_settings( array(
			'blog_cat_num'              => 5,	
			'content_archive'           => 'excerpt',
			'content_archive_limit'     => 200,
			'content_archive_thumbnail' => 0,
			'image_alignment'           => 'aligncenter',
			'posts_nav'                 => 'numeric',
			'site_layout'               => 'content-sidebar',
		) );
		
	} else {
	
		_genesis_update_settings( array(
			'blog_cat_num'              => 5,	
			'content_archive'           => 'full',
			'content_archive_limit'     => 0,
			'content_archive_thumbnail' => 0,
			'image_alignment'           => 'aligncenter',
			'posts_nav'                 => 'numeric',
			'site_layout'               => 'content-sidebar',
		) );

	}

	update_option( 'posts_per_page', 5 );

}

//* Simple Social Icon Defaults
add_filter( 'simple_social_default_styles', 'blog_pro_social_default_styles' );
function blog_pro_social_default_styles( $defaults ) {

	$args = array(
		'alignment'              => 'alignleft',
		'background_color'       => '#333333',
		'background_color_hover' => '#555555',
		'border_radius'          => 3,
		'icon_color'             => '#ffffff',
		'icon_color_hover'       => '#ffffff',
		'size'                   => 36,
	);
		
	$args = wp_parse_args( $args, $defaults );
	
	return $args;
	
}