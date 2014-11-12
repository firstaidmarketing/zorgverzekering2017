<?php

class Keuze_Theme {

	# Holds singleton object
	static $instance = null;

	# The variant of the theme
	public $variant;

	/**
	 * Constructor, uses hooks to integrate functionalities into WordPress
	 * Protected due to the singleton pattern
	 */
	protected function __construct() {

		
		// Translations can be filled in the /languages/ directory
		add_filter( 'locale', array( $this, 'set_locale' ) );
		
		load_theme_textdomain( 'keuze', trailingslashit( get_template_directory() ) .  'languages' );
		
		# Activate thumbnail support
		add_theme_support('post-thumbnails');
		
		# Set default thumbnail size
	    set_post_thumbnail_size( 50, 72, true );

	    # Set default excerpt size
		add_filter( 'excerpt_length', function( $length ) {
			return 35;
		});

		# Show the WordPress Kitchen Sink Options on the Editor by Default
		add_filter( 'tiny_mce_before_init', function($args) {

			$args['wordpress_adv_hidden'] = false;
			return $args;

		});

		# Removed basic CSS from gallery shortcode
		add_filter( 'use_default_gallery_style', '__return_false' );

		# Excerpt more indication
		add_filter( 'excerpt_more', function() {
			return " ...";
		});

		# Disable default WordPress widgets
		add_action( 'widgets_init', array( $this, 'deregister_default_widgets' ), 11 );

		# Disable XML-RPC
		add_filter( 'xmlrpc_enabled', '__return_false' );

		# Add dynamic menu's 
		add_action( 'init', array( $this, 'register_menus' ) );

		# Adjust menu's 
		add_action( 'init', array( $this, 'adjust_menus' ) );

		# Add shortcodes
		add_action( 'init', array( $this, 'register_shortcodes') );

		# Add sidebars
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );

		# Prevent Yoast plugins from displaying popups
		add_action( 'admin_init', array( $this, 'prevent_yoast_popups') );
		add_action( 'admin_footer', array( $this, 'move_wpseo_metabox' ) );
		
		# Enqueue stylesheets
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ), 11 );

		# Enqueue javascripts
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 11 );

		# Gravity Forms adjustments
		add_filter( 'gform_tabindex', function() { return '100'; });

	}

	public function set_locale( $locale ) {
		if( ! is_admin() || ( isset( $_POST['action'] ) && in_array( $_POST['action'], array() ) ) ) {
			$locale_tmp = get_option( 'options_language' );
			if( $locale_tmp != '' ) {
				$locale = $locale_tmp;
			}
		}
		else {
			$locale = 'en_US';
		}
		
		return $locale;
	}
	/**
	 * Register the dynamic menu's for our theme
	 */
	public function register_menus() {
		
		register_nav_menus( array(
			'main_nav' => "Main navigation"
		));

		register_nav_menus( array(
			'footer_nav' => "Footer navigation"
		));
	}

	/**
	 * Register the dynamic menu's for our theme
	 */
	public function adjust_menus() {

	}

	/**
	 * Register sidebars
	 */
	public function register_sidebars() {

	}

	public function register_shortcodes() {

		add_shortcode('button', function( $atts, $content = '' ) {
			$atts = shortcode_atts( array(
				'href' => '',
				'rel' => ''
			), $atts );

			$rel = ! empty( $atts['rel'] ) ? ' rel="' . $atts['rel'] . '" ' : '';

			if( absint( $atts['href'] ) > 0 ) {
				$href = get_permalink( $atts['href'] );
			}
			else {
				$href = substr( $atts['href'], 0, 4 ) != 'http' ? trailingslashit( get_home_url() ) . $atts['href'] : $atts['href'];
			}

			return '<a href="' . $href . '" class="button"' . $rel . '>' . esc_attr( $content ) . '</a>';

		});


	}

	public function prevent_yoast_popups() {

		// WP SEO
		$wpseo_option = get_option( 'wpseo' );
		if( !$wpseo_option )
			$wpseo_option = array();

		$wpseo_option['yoast_tracking'] = false;
		$wpseo_option['tracking_popup'] = "done";
		$wpseo_option['ignore_tour'] = "on";
		$wpseo_option['ignore_blog_public_warning'] = 'ignore';

		update_option( 'wpseo', $wpseo_option );

		// WP SEO social
		$wpseo_social_option = get_option( 'wpseo_social' );
		if( ! $wpseo_social_option )
			$wpseo_social_option = array();

		$wpseo_social_option['opengraph'] = "on";
		$wpseo_social_option['twitter'] = "on";

		// Google Analytics
		$ga_option = get_option( 'Yoast_Google_Analytics' );
		if( !$ga_option )
			$ga_option = array();

		$ga_option['yoast_tracking'] = false;
		$ga_option['tracking_popup'] = "done";
		$ga_option['ignore_tour'] = "on";
		$ga_option['ignore_blog_public_warning'] = 'ignore';

		update_option( 'Yoast_Google_Analytics', $ga_option );
	}

	public function move_wpseo_metabox() {
		$script = PHP_EOL . '<script>
			jQuery(document).ready(function ($) {
				// Move WP SEO box to below
				if ( $("#wpseo_meta").length > 0 ) {
			    	$("#wpseo_meta").appendTo( $("#postbox-container-2 #normal-sortables") );
				}
			});

		</script>' . PHP_EOL;

		echo $script;
	}

	/**
	 * Add our stylesheets includes to the page header 
	 */
	public function enqueue_styles() {

		# Enqueue main CSS file
		wp_register_style( 'keuze-styles', keuze_theme_url( 'assets/css/style.css' ), null, null, 'screen' );
		wp_enqueue_style( 'keuze-styles' );

	}

	/**
	 *  Add our javascript files includes to the page header and footer
	 */
	public function enqueue_scripts() {

		# Enqueue jQuery
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', null, null, false );
		wp_enqueue_script( 'jquery' );

		# Enqueue Main scripts
		wp_register_script( 'modernizr', keuze_theme_url( 'assets/js/vendor/modernizr-2.8.3.min.js' ), null, null, true );
		wp_enqueue_script( 'modernizr' );

		wp_register_script( 'keuze', keuze_theme_url( 'assets/js/main.min.js' ), array('jquery'), null, true );
		wp_enqueue_script( 'keuze' );
	}

	/**
	 * Disable default WordPress widgets
	 */
	public function deregister_default_widgets() {
	     unregister_widget('WP_Widget_Pages');
	     unregister_widget('WP_Widget_Calendar');
	     unregister_widget('WP_Widget_Archives');
	     unregister_widget('WP_Widget_Links');
	     unregister_widget('WP_Widget_Meta');
	     unregister_widget('WP_Widget_Search');
	     unregister_widget('WP_Widget_Categories');
	     unregister_widget('WP_Widget_Recent_Posts');
	     unregister_widget('WP_Widget_Recent_Comments');
	     unregister_widget('WP_Widget_RSS');
	     unregister_widget('WP_Widget_Tag_Cloud');
	     unregister_widget('Twenty_Eleven_Ephemera_Widget');
	}

	public static function get_youtube_id( $url ) {
		$youtube_id = false;
	  
		if( '' != $url ) {
			$parsed_url = parse_url( $url );

			if( ! empty( $parsed_url['query'] ) ) {
				parse_str( $parsed_url['query'], $parameters );
				
				if( isset( $parameters['v'] ) ) {
					$youtube_id = $parameters['v'];
				}
			}			
		}

		return $youtube_id;
	}

	/**
	 * Method to easily get the right URL when wanting to reference the theme folder URI.
	 * For wonderful convenience!
	 */
	public static function theme_url( $url = '' ) {
		return trailingslashit( get_template_directory_uri() ) . $url;
	}

	/**
	 * Fire up a new instance of our theme class
	 *
	 * @return Keuze_Theme object $instance 
	 */
	public static function instance() {

		# Check if we already have an instance alive
		if( ! isset( static::$instance ) ) {

			# Fire it up
			static::$instance = new static;
		}

		return static::$instance;
	}

	/**
	 * Get the variant of the theme
	 */
	public function get_variant() {
		return $this->variant;
	} 

}

function keuze_get_youtube_id( $url = '' ) {
	return Keuze_Theme::instance()->get_youtube_id( $url );
}
function keuze_theme_url( $url = '' ) {
	return Keuze_Theme::instance()->theme_url( $url );
}

# Start the Keuze_Theme class
Keuze_Theme::instance();

?>