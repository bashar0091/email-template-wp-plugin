<?php
/**
 * Plugin Name: Email Template
 * Description: 
 * Version:     1.0.0
 * Author:      Vizifly
 * Author URI:  
 * Text Domain: email_template
 */

// Prevent direct access to the plugin file
defined('ABSPATH') || exit;

/**
 * 
 * enqueue css and js 
 * 
 */

 function etheme_enqueue_scripts() {

	// css file 
    wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'assets/css/custom.css', false, '1.0.0', '');

	// js add 
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'assets/js/custom.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'etheme_enqueue_scripts');


/**
 * 
 * require file
 * 
 */

 require_once('shortcode/email-template-button-popup.php');