<?php 
/*
* Plugin Name: Recipe
* Description: A simple Wordpress plugin that allows user to create recipes and rate those funny things
* Version: 1.0
* Author: Devleopar
* Author URI: https://github.com/devLeopar
* Text Domain: recipe
*/

if( !function_exists( 'add_action' ) ){
    echo "Hi there! I'm just a plugin, not much I can do when called directly.";
    exit;
}

// Setup


// Includes
include( 'includes/activate.php' );

// Hooks
register_activation_hook( __FILE__,'r_activate_plugin');

// Shortcode


?>