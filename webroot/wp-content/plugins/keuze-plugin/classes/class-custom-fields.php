<?php

class Keuze_Custom_Fields {

	private static $instance;
	

	/**
	 * Constructor function, adds hooks for WP integration
	 * @return (void)
	 */
	private function __construct() {
		
		add_action( 'init', array( $this, 'add_custom_fields' ) );
	}

	public function add_custom_fields() {
		if( ! function_exists( "register_field_group" ) ) {
			return;
		}

		register_field_group(array (
			'id' => 'acf_homepage',
			'title' => 'Homepage',
			'fields' => array (
				array (
					'key' => 'field_55a605519dcd1',
					'label' => 'Verzekeringen',
					'name' => 'verzekeringen',
					'type' => 'repeater',
					'sub_fields' => array (
						array (
							'key' => 'field_55a6056d9dcd2',
							'label' => 'Pagina',
							'name' => 'page',
							'type' => 'post_object',
							'column_width' => '',
							'post_type' => array (
								0 => 'page',
							),
							'taxonomy' => array (
								0 => 'all',
							),
							'allow_null' => 0,
							'multiple' => 0,
						),
					),
					'row_min' => '',
					'row_limit' => '',
					'layout' => 'row',
					'button_label' => 'Nieuwe verzekering',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-algemeen',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'meta_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));

		register_field_group(array (
			'id' => 'acf_dit-is-een-verzekering',
			'title' => 'Dit is een verzekering',
			'fields' => array (
				array (
					'key' => 'field_546327bc64c58',
					'label' => 'Dit is een verzekering',
					'name' => 'is_insurance',
					'type' => 'true_false',
					'message' => 'Deze pagina is een verzekering. Toon op de homepage bij de tabs',
					'default_value' => 0,
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'side',
				'layout' => 'default',
				'hide_on_screen' => array (
					0 => 'excerpt',
					1 => 'custom_fields',
					2 => 'discussion',
					3 => 'comments',
					4 => 'revisions',
					5 => 'format',
					6 => 'featured_image',
					7 => 'categories',
					8 => 'tags',
					9 => 'send-trackbacks',
				),
			),
			'menu_order' => 0,
		));
		register_field_group(array (
			'id' => 'acf_titel-in-pagina',
			'title' => 'Titel in pagina',
			'fields' => array (
				array (
					'key' => 'field_54646b3fdd648',
					'label' => 'Titel in de pagina',
					'name' => 'page_title',
					'type' => 'text',
					'instructions' => 'Vul hier een alternatieve titel in, voor als de paginanaam de lading niet dekt.',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'acf_after_title',
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
		register_field_group(array (
			'id' => 'acf_verzekering-details',
			'title' => 'Verzekering details',
			'fields' => array (
				array (
					'key' => 'field_546320672be36',
					'label' => 'Afgekorte naam',
					'name' => 'short_name',
					'type' => 'text',
					'instructions' => 'Bijv. "Auto" in geval van "Autoverzekering"',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array (
					'key' => 'field_54631e6d14f10',
					'label' => 'Oneliner',
					'name' => 'oneliner',
					'type' => 'text',
					'instructions' => 'Wordt getoond bij de ingangen op de homepage, onder het icon',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_54632b9a09afc',
					'label' => 'Homepage formulier: Titel',
					'name' => 'homepage_form_title',
					'type' => 'text',
					'instructions' => 'Titel boven het formulier op de homepage',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_54631df814f0e',
					'label' => 'Homepage formulier: Tekst',
					'name' => 'homepage_form_text',
					'type' => 'wysiwyg',
					'instructions' => 'Tekst op de homepage, naast het formulier',
					'default_value' => '',
					'toolbar' => 'basic',
					'media_upload' => 'yes',
				),
				array (
					'key' => 'field_54633f7d827bd',
					'label' => 'Komparu script/shortcode.',
					'name' => 'komparu_script',
					'type' => 'text',
					'instructions' => 'Plaats hier de shortcode (<code>[komparu_module]</code>) of het script van Komparu.',
					'default_value' => '',
					'placeholder' => '<script src="http://code.komparu.com/BBBBB.js"></script>',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 0,
					),
					array (
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'default',
						'order_no' => 1,
						'group_no' => 0,
					),
				),
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 1,
					),
					array (
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'templates/tpl-verzekering.php',
						'order_no' => 1,
						'group_no' => 1,
					)
				),
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 1,
					),
					array (
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'templates/tpl-verzekering-notabs.php',
						'order_no' => 1,
						'group_no' => 1,
					)
				)
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
		register_field_group(array (
			'id' => 'acf_vragen',
			'title' => 'Vragen',
			'fields' => array (
				array (
					'key' => 'field_546471f2fed7e',
					'label' => 'Vragenset',
					'name' => 'question_set',
					'type' => 'repeater',
					'sub_fields' => array (
						array (
							'key' => 'field_54647214fed7f',
							'label' => 'Titel',
							'name' => 'title',
							'type' => 'text',
							'column_width' => '',
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'formatting' => 'none',
							'maxlength' => '',
						),
						array (
							'key' => 'field_54647220fed80',
							'label' => 'Vragen',
							'name' => 'questions',
							'type' => 'repeater',
							'column_width' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_5464723cfed81',
									'label' => 'Vraag',
									'name' => 'question',
									'type' => 'text',
									'column_width' => '',
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'formatting' => 'none',
									'maxlength' => '',
								),
								array (
									'key' => 'field_54647245fed82',
									'label' => 'Antwoord',
									'name' => 'answer',
									'type' => 'wysiwyg',
									'column_width' => '',
									'default_value' => '',
									'toolbar' => 'basic',
									'media_upload' => 'yes',
								),
							),
							'row_min' => '',
							'row_limit' => '',
							'layout' => 'row',
							'button_label' => 'Nieuwe vraag',
						),
					),
					'row_min' => '',
					'row_limit' => '',
					'layout' => 'row',
					'button_label' => 'Nieuwe vragenset',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 0,
					),
					array (
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'templates/tpl-vragen.php',
						'order_no' => 1,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
		register_field_group(array (
			'id' => 'acf_website-instellingen',
			'title' => 'Website instellingen',
			'fields' => array (
				array (
					'key' => 'field_54633168e67aa',
					'label' => 'Contact',
					'name' => '',
					'type' => 'tab',
				),
				array (
					'key' => 'field_546324f82d2d3',
					'label' => 'Telefoonnummer',
					'name' => 'phone_number',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-algemeen',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));

	}


	/**
	 * Returns an instance of this class. An implementation of the singleton design pattern.
	 *
	 * @return   instance    A reference to an instance of this class.
	 * @since    1.0.0
	 */
	public static function get_instance() {

		if( null == self::$instance ) {
			self::$instance = new Keuze_Custom_Fields();
		}

		return self::$instance;

	}

}

?>