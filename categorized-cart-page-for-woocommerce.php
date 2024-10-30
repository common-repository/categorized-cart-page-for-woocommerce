<?php
/*
Plugin Name:  Categorized Cart Page For Woocommerce 
Description:  Display products on cart page in categorized format 
Version:      1.0
Author:       Abbas Khalil
Author URI:   http://www.linekal.com/
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function categorized_cart_locate_template( $template, $template_name, $template_path ) {
 $basename = basename( $template );
 if( $basename == 'cart.php' ) {
 $template = trailingslashit( plugin_dir_path( __FILE__ ) ) . 'templates/cart.php';
 }
 return $template;
}
add_filter( 'woocommerce_locate_template', 'categorized_cart_locate_template', 10, 3 );


?>