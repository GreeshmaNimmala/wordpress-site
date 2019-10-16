<?php
/**
 * suraksha-security-guard: Customizer
 *
 * @package WordPress
 * @subpackage suraksha-security-guard
 * @since 1.0
 */

function suraksha_security_guard_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'suraksha_security_guard_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'suraksha-security-guard' ),
	    'description' => __( 'Description of what this panel does.', 'suraksha-security-guard' ),
	) );

	$wp_customize->add_section( 'suraksha_security_guard_theme_options_section', array(
    	'title'      => __( 'General Settings', 'suraksha-security-guard' ),
		'priority'   => 30,
		'panel' => 'suraksha_security_guard_panel_id'
	) );

	// Add Settings and Controls for Layout
	
	$wp_customize->add_setting('suraksha_security_guard_theme_options',array(
        'default' => __('Right Sidebar','suraksha-security-guard'),
        'sanitize_callback' => 'suraksha_security_guard_sanitize_choices'	        
	));

	$wp_customize->add_control('suraksha_security_guard_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','suraksha-security-guard'),
        'section' => 'suraksha_security_guard_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','suraksha-security-guard'),
            'Right Sidebar' => __('Right Sidebar','suraksha-security-guard'),
            'One Column' => __('One Column','suraksha-security-guard'),
            'Three Columns' => __('Three Columns','suraksha-security-guard'),
            'Four Columns' => __('Four Columns','suraksha-security-guard'),
            'Grid Layout' => __('Grid Layout','suraksha-security-guard')
        ),
	));

	// Contact Details
	$wp_customize->add_section( 'suraksha_security_guard_contact_details', array(
    	'title'      => __( 'Contact Details', 'suraksha-security-guard' ),
		'priority'   => null,
		'panel' => 'suraksha_security_guard_panel_id'
	) );

	$wp_customize->add_setting('suraksha_security_guard_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('suraksha_security_guard_location',array(
		'label'	=> __('Contact Number','suraksha-security-guard'),
		'section'=> 'suraksha_security_guard_contact_details',
		'setting'=> 'suraksha_security_guard_location',
		'type'=> 'text'
	));

	$wp_customize->add_setting('suraksha_security_guard_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('suraksha_security_guard_mail',array(
		'label'	=> __('Email Address','suraksha-security-guard'),
		'section'=> 'suraksha_security_guard_contact_details',
		'setting'=> 'suraksha_security_guard_mail',
		'type'=> 'text'
	));	

	//Social Icons(topbar)
	$wp_customize->add_section('suraksha_security_guard_topbar_header',array(
		'title'	=> __('Social Icon Section','suraksha-security-guard'),
		'description'	=> __('Add Header Content here','suraksha-security-guard'),
		'priority'	=> null,
		'panel' => 'suraksha_security_guard_panel_id',
	));

	$wp_customize->add_setting('suraksha_security_guard_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('suraksha_security_guard_facebook_url',array(
		'label'	=> __('Add Facebook link','suraksha-security-guard'),
		'section'	=> 'suraksha_security_guard_topbar_header',
		'setting'	=> 'suraksha_security_guard_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('suraksha_security_guard_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('suraksha_security_guard_twitter_url',array(
		'label'	=> __('Add Twitter link','suraksha-security-guard'),
		'section'	=> 'suraksha_security_guard_topbar_header',
		'setting'	=> 'suraksha_security_guard_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('suraksha_security_guard_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('suraksha_security_guard_insta_url',array(
		'label'	=> __('Add Instagram link','suraksha-security-guard'),
		'section'	=> 'suraksha_security_guard_topbar_header',
		'setting'	=> 'suraksha_security_guard_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('suraksha_security_guard_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('suraksha_security_guard_pinterest_url',array(
		'label'	=> __('Add Pinterest link','suraksha-security-guard'),
		'section'	=> 'suraksha_security_guard_topbar_header',
		'setting'	=> 'suraksha_security_guard_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('suraksha_security_guard_whatsapp_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('suraksha_security_guard_whatsapp_url',array(
		'label'	=> __('Add Whatsapp link','suraksha-security-guard'),
		'section'	=> 'suraksha_security_guard_topbar_header',
		'setting'	=> 'suraksha_security_guard_whatsapp_url',
		'type'	=> 'url'
	));	

	$wp_customize->add_setting('suraksha_security_guard_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('suraksha_security_guard_linkedin_url',array(
		'label'	=> __('Add Linkedin link','suraksha-security-guard'),
		'section'	=> 'suraksha_security_guard_topbar_header',
		'setting'	=> 'suraksha_security_guard_linkedin_url',
		'type'	=> 'url'
	));	

	//home page slider
	$wp_customize->add_section( 'suraksha_security_guard_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'suraksha-security-guard' ),
		'priority'   => null,
		'panel' => 'suraksha_security_guard_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'suraksha_security_guard_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'suraksha_security_guard_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'suraksha_security_guard_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'suraksha-security-guard' ),
			'section'  => 'suraksha_security_guard_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//OUR services
	$wp_customize->add_section('suraksha_security_guard_our_services',array(
		'title'	=> __('Our Services','suraksha-security-guard'),
		'description'=> __('This section will appear below the slider.','suraksha-security-guard'),
		'panel' => 'suraksha_security_guard_panel_id',
	));	

	$wp_customize->add_setting('suraksha_security_guard_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('suraksha_security_guard_section_title',array(
		'label'	=> __('Section Title','suraksha-security-guard'),
		'section'=> 'suraksha_security_guard_our_services',
		'setting'=> 'suraksha_security_guard_section_title',
		'type'=> 'text'
	));

	for ( $count = 0; $count <= 3; $count++ ) {

		$wp_customize->add_setting( 'suraksha_security_guard_services' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'suraksha_security_guard_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'suraksha_security_guard_services' . $count, array(
			'label'    => __( 'Select Service Page', 'suraksha-security-guard' ),
			'section'  => 'suraksha_security_guard_our_services',
			'type'     => 'dropdown-pages'
		));
	}

	//Footer
    $wp_customize->add_section( 'suraksha_security_guard_footer', array(
    	'title'      => __( 'Footer Text', 'suraksha-security-guard' ),
		'priority'   => null,
		'panel' => 'suraksha_security_guard_panel_id'
	) );

    $wp_customize->add_setting('suraksha_security_guard_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('suraksha_security_guard_footer_copy',array(
		'label'	=> __('Footer Text','suraksha-security-guard'),
		'section'	=> 'suraksha_security_guard_footer',
		'setting'	=> 'suraksha_security_guard_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'suraksha_security_guard_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'suraksha_security_guard_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'suraksha_security_guard_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'suraksha-security-guard' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'suraksha-security-guard' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'suraksha_security_guard_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'suraksha_security_guard_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'suraksha_security_guard_customize_register' );

function suraksha_security_guard_customize_partial_blogname() {
	bloginfo( 'name' );
}

function suraksha_security_guard_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function suraksha_security_guard_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function suraksha_security_guard_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Suraksha_Security_Guard_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Suraksha_Security_Guard_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Suraksha_Security_Guard_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Suraksha Security Pro', 'suraksha-security-guard' ),
					'pro_text' => esc_html__( 'Go Pro','suraksha-security-guard' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/security-guard-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'suraksha-security-guard-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'suraksha-security-guard-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Suraksha_Security_Guard_Customize::get_instance();