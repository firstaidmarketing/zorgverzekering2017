<?php

class Keuze_Core {

	private static $instance;
	

	/**
	 * Constructor function, adds hooks for WP integration
	 * @return (void)
	 */
	private function __construct() {
		
		add_action( 'init', array( $this, 'init' ) );
		add_filter( 'acf/options_page/settings', array( $this, 'option_pages' ) );
	}

	public function init() {

	}

	function option_pages( $settings ) {
		$settings['title'] = 'Website settings';
		$settings['pages'] = array(
			array(
				'menu' => 'Algemene instellingen',
				'title' => 'Algemeen'
			),
			array(
				'menu' => 'Contact instellingen',
				'title' => 'Contact'
			)
		);

		return $settings;
	}

	

	/**
	 * Returns an instance of this class. An implementation of the singleton design pattern.
	 *
	 * @return   instance    A reference to an instance of this class.
	 * @since    1.0.0
	 */
	public static function get_instance() {

		if( null == self::$instance ) {
			self::$instance = new Keuze_Core();
		}

		return self::$instance;

	}

}

?>