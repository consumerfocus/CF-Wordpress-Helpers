<?php

/*******CUSTOM ADMIN LOGIN HEADER LOGO*********/
// function my_custom_login_logo()
// {
//     echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/images/logo.png)  !important; background-size: 211px 128px !important; width: 211px !important; height: 128px !important; } </style>';
// }
// add_action('login_head',  'my_custom_login_logo');

/*******CUSTOM ADMIN LOGIN LOGO LINK*********/
// function change_wp_login_url($url) 
// {
//     return get_option('home'); 
// }
// add_filter('login_headerurl', 'change_wp_login_url');
 
/*******CUSTOM ADMIN LOGIN LOGO ALT TEXT*********/
 
// function change_wp_login_title() 
// {
//     return ' Company'; // OR ECHO YOUR OWN ALT TEXT
// }
// add_filter('login_headertitle', 'change_wp_login_title');




/******************* Shortcodes *********************/
//button
function button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'link' => '',
		'align' => '',
		'target' => ''), $atts));	
	$button = '';
	if ($align === "center") {$align = 'btn-center';}
	else {$align = '';}
	if ($target === "blank") {
		$button .= '<a style="margin-bottom: 5px;" class="btn btn-primary '.$align.'" href="'.$link.'" target="' .$target.'">' . do_shortcode($content) . '</a>';
	}
	else {
		$button .= '<a class="btn btn-primary '.$align.'" href="'.$link.'">' . do_shortcode($content) . '</a>';
	}
	return $button;
}
add_shortcode('button', 'button');

//well
function well( $atts, $content = null ) {
	extract(shortcode_atts(array(
	'color' => ''), $atts));
	$well = '';
	$colorClass= '';
	if ($color) $colorClass = 'well-' . $color;
	$well .= '<div class="well wellBorder ' . $colorClass . '">' . do_shortcode($content) . '</div>';
	return $well;
}

add_shortcode('well', 'well');

// Callout

function callout( $atts, $content = null ) {
	extract(shortcode_atts(array(
	'color' => ''), $atts));
	$callout = '';
	$colorClass= '';
	if ($color) $colorClass = 'callout-' . $color;
	$callout .= '<div class="callout ' . $colorClass . '">' . do_shortcode($content) . '</div>';
	return $callout;
}

add_shortcode('callout', 'callout');

//Clearfix
function clear( $atts, $content = null ) {
	return '<div class="clear"></div>';
}
add_shortcode('clear', 'clear');



// Modal
function modal( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'title' => '',
		'slug' => '',
		'type' =>''), $atts));	
	$modal = '';
	 {
		$modal .= '<a href="#" data-toggle="modal" data-target="#'.$slug.'">'.$title.'</a>
					<div id="'.$slug.'" class="modal fade locationsModal" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content"> 
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					      </div>
					      <div class="modal-body" style="padding-bottom:20px">' . do_shortcode($content) . '<div class="clearfix"</div></div>
					    </div>

					  </div>
					</div>';
	}
	return $modal;
}
add_shortcode('modal', 'modal');




/******************** Register Menus***********************/
function register_my_menus() {
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu' ))
	);
}
add_action( 'init', 'register_my_menus' );



/*************** Add buttons to visual editor*************/
function enable_more_buttons($buttons) {
  $buttons[] = 'hr';
  $buttons[] = 'anchor';
 return $buttons;
}
add_filter("mce_buttons", "enable_more_buttons");
//add_filter("mce_buttons_2", "enable_more_buttons"); // add to second row
//add_filter("mce_buttons_3", "enable_more_buttons"); // add to third row




// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

add_theme_support( 'post-thumbnails' );



?>