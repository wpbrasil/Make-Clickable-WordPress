<?php
	/**
	 * Plugin Name: Make Clickable WordPress
	 * Plugin URI: https://github.com/wpbrasil/Make-Clickable-WordPress
	 * Description: Convert plain text URI to HTML links. Converts URI, www, FTP, and email addresses.
	 * Author: leobaiano, valeriosza, rafaehlers, gugaalves, rafaelfunchal, miriamdepaula, dianakc, claudiosanches, bordoni, jimmymacedo, fdaciuk
	 * Author URI: http://guwp.org/
	 * Version: 1.0.0
	 * License: GPLv2 or later
	 */

	if ( ! defined( 'ABSPATH' ) )
		exit; // Exit if accessed directly.

	/**
	 * Make Clickable WordPress
	 */
	class Make_Clickable_WordPress {

	/**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin public actions.
	 */
	private function __construct() {
		add_filter( 'the_content', array( $this, 'make_clickable' ) );
	}


		/**
		 * Return an instance of this class.
		 *
		 * @return object A single instance of this class.
		 */
		public static function get_instance() {
			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self;
			}

			return self::$instance;
		}

		/**
		 * Convert plain text URI to HTML links
		 *
		 * @param string $content Post content
		 * @return string Post content with the urls converted to HTML
		 */
		function make_clickable( $content ){
			return make_clickable( $content );
		}
	}

	add_action( 'plugins_loaded', array( 'Make_Clickable_WordPress', 'get_instance' ), 0 );
?>