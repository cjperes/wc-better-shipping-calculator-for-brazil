<?php
/*
 * Plugin Name: Better Shipping Calculator for Brazilian Markets
 * Version: 2.0.0
 * Plugin URI: https://github.com/luizbills/wc-better-shipping-calculator-for-brazil
 * Description: Shipping calculator without Country and State fields. Works only in brazilian stores.
 * Author: Luiz Bills
 * Author URI: http://github.com/luizbills
 * Requires at least: 4.6
 * Tested up to: 5.3
 *
 * WC requires at least: 2.6
 * WC tested up to: 3.9
 *
 * Text Domain: wc-better-shipping-calculator-for-brazil
 * Domain Path: /lang/
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-wc-better-shipping-calculator-for-brazil-plugin.php' );

/**
 * Returns the main instance of WC_Better_Shipping_Calculator_for_Brazil to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object WC_Better_Shipping_Calculator_for_Brazil
 */
function WC_Better_Shipping_Calculator_for_Brazil () {
	$instance = WC_Better_Shipping_Calculator_for_Brazil_Plugin::instance( __FILE__, '1.1.0' );

	return $instance;
}

WC_Better_Shipping_Calculator_for_Brazil();
