<?php 
/*
Plugin Name: Bootstrap Fontawesome CDN
Plugin URI: www.rhodian.net
Description: Bootstrap Fontawesome CDN link integration
Version: 1.0
Author: William Wright
Author URI: www.rhodian.net
License: GPL2
*/

// Add Bootstrap CDN link
function rh_bootstrap_css_cdn() {
    wp_enqueue_style( 'rh-bootstrap-css-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'rh_bootstrap_css_cdn' );
// Add js for Bootstrap CDN
function rh_bootstrap_js_cdn() {
    wp_enqueue_script( 'rh-bootstrap-js-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(''), '3.3.4', true );
}
add_action( 'wp_enqueue_scripts', 'rh_bootstrap_js_cdn' );
// Add Fontawesome CDN link
function rh_fontawesome_css_cdn() {
    wp_enqueue_style( 'rh-fontawesome-css-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'rh_fontawesome_css_cdn' );

