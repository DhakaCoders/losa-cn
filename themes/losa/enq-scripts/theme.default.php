<?php
/**
Theme specific styles and scripts
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_style( $handle, $src, $deps, $ver );
*/ 
wp_enqueue_style('cbv-twentytwenty-style', get_template_directory_uri() . '/assets/twentytwenty-master/twentytwenty.css', array(), array(0, 99));
wp_enqueue_style('cbv-style', get_stylesheet_uri(), array(), rand(0, 999));
wp_enqueue_style('cbv-devices-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), array(0, 99));
wp_enqueue_script('jquery.event.move', get_template_directory_uri() . '/assets/twentytwenty-master/jquery.event.move.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('jquery.twentytwenty', get_template_directory_uri() . '/assets/twentytwenty-master/jquery.twentytwenty.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('cbv-custom', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('cbv-tabsliders', get_template_directory_uri() . '/assets/js/tabsliders.js', array('jquery'), '1.0.0', true);

?>