<?php
/**
 * Custom hooks.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		do_action( 'understrap_site_info' );
	}
}

if ( ! function_exists( 'understrap_add_site_info' ) ) {
	add_action( 'understrap_site_info', 'understrap_add_site_info' );

	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {
		if ( function_exists( 'the_custom_logo' ) ) {
			$site_info = the_custom_logo();
		}
		else {
			$site_info = "(c) FF Pressbaum";
		}
		//echo $site_info;


		echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.



	}
}
