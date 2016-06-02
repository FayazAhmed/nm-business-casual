<?php

/**
	** ========== SARTS --- Theme customizer api block
	**/

		function fuzzy_customize_register( $wp_customize ) {
  			// Do stuff with $wp_customize, the WP_Customize_Manager object.

  			//=====================************** THEME COSTOMIZE *****************============
			/**
			*** panel for 
			**/
			$wp_customize->add_panel( 'general_pannel', array(
			  'title'          => __( 'General_pannel' ),
			  'description'    => '', // Include html tags such as <p>.
			  'priority'       => 140, // Mixed with top-level-section hierarchy.
			) );

			/**
			*** section for theme layout
			**/
			$wp_customize->add_section( 'general-section', array(
			  'title'          => 'General',
			  'description'    => __( '' ),
			  'panel'          => 'general_pannel', // Not typically needed.
			  'priority'       => 142,
			  'capability'     => 'edit_theme_options',
			  'theme_supports' => '', // Rarely needed.
			) );

			/**
			*** addding settings
			**/
  			$wp_customize->add_setting( 'general-site-layout', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'site-background-color', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'fuzzy-background-img', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );
			/**
			*** control for theme layout
			**/
			$wp_customize->add_control( 'general-site-layout', array(
			  'label'        => __( 'Set theme site layout', 'nm-fuzzy' ),
			  'type'         => 'radio',
			  'choices'      =>array(
			  	'boxed'      => 'Boxed',
			  	'fullwidth'  => 'Full Width'),
			  'section'      => 'general-section',
			));
			$wp_customize->add_control( 'site-background-color', array(
			  'label'    => __( 'Set theme background color', 'nm-fuzzy' ),
			  'type'     => 'color',
			  'section'  => 'general-section',
			));

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fuzzy-background-img', array(
			  'label' => __( 'Fuzzy Background Image', 'nm-fuzzy' ),
			  'section' => 'general-section',
			  'mime_type' => 'image',
			) ) );
//   ===============*********** TOP-BAR AREA COSTOMIZE ************============

			/**
			*** section for topbar
			**/
			$wp_customize->add_section( 'topbar_section', array(
			  'title'          => __( 'Top-bar Section' ),
			  'description'    => __( 'Set top-bar' ),
			  'panel'          => '', // Not typically needed.
			  'priority'       => 131,
			  'capability'     => 'edit_theme_options',
			  'theme_supports' => '', // Rarely needed.
			) );
			
			/**
			*** addding settings
			**/

			$wp_customize->add_setting( 'fuzzy_big_title', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '',
			  'transport'		  => 'postMessage',
			) );

			$wp_customize->add_setting( 'fuzzy_big_title_color', array(
			  'default'     => '#000000',
    			'transport'   => 'refresh',
			) );

			$wp_customize->add_setting( 'fuzzy_menu_bg_color', array(
			  'default'     => '#000000',
    			'transport'   => 'refresh',
			) );



			$wp_customize->add_setting( 'fuzzy_phone_no', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );
  			
  			$wp_customize->add_setting( 'fuzzy_email_adress', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );
			
			/**
			*** controls for top-bar
			**/
			$wp_customize->add_control( 'fuzzy_big_title', array(
			  'label'    => __( 'Set Big Title on Top', 'nm-fuzzy' ),
			  'type'     => 'text',
			  'section'  => 'topbar_section',
			) );

			$wp_customize->add_control( 'fuzzy_big_title_color', array(
			  'label'    => __( 'Set Big Title Color', 'nm-fuzzy' ),
			  'type'     => 'color',
			  'section'  => 'topbar_section',
			) );

			$wp_customize->add_control( 'fuzzy_menu_bg_color', array(
			  'label'    => __( 'Set Menu BG Color', 'nm-fuzzy' ),
			  'type'     => 'color',
			  'section'  => 'topbar_section',
			) );
			

			$wp_customize->add_control( 'fuzzy_phone_no', array(
			  'label'    => __( 'Set phone no. on top-bar', 'nm-fuzzy' ),
			  'type'     => 'number',
			  'section'  => 'topbar_section',
			) );

			$wp_customize->add_control( 'fuzzy_email_adress', array(
			  'label'    => __( 'Set Email Adress on top-bar', 'nm-fuzzy' ),
			  'type'     => 'email',
			  'section'  => 'topbar_section',
			) );
			//=====================*********** HEADER AREA COSTOMIZE ************============

			/*e*
			*** section for header
			**/
			$wp_customize->add_section( 'header_section', array(
			  'title'          => __( 'Header Section' ),
			  'description'    => __( 'Set header' ),
			  'panel'          => '', //e Not typically needed.
			  'priority'       => 143,
			  'capability'     => 'edit_theme_options',
			  'theme_supports' => '', // Rarely needed.
			) );
			/**
			*** addding settings
			**/
			$wp_customize->add_setting( 'fuzzy_nav_menu_font_size', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '#ff2525',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'fuzzy_nav_menu_font_family', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => 'Comic Sans MS',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'fuzzy_nav_menu_color', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '#ff2525',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_setting( 'fuzzy_logo_img', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			) );

			$wp_customize->add_setting( 'fuzzy_nav_menu_onhover', array(
			  'type'              => 'option',
			  'capability'        => 'manage_options',
			  'default'           => '#ff2525',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );
			/**
			*** control for header
			**/
			$wp_customize->add_control( 'fuzzy_nav_menu_font_size', array(
			  'label'   => __( 'Set nav-menu font_size', 'nm-fuzzy' ),
			  'type'    => 'number',
			  'section' => 'header_section',
			) );

			$wp_customize->add_control( 'fuzzy_nav_menu_font_family', array(
			  'label'     => __( 'Set nav-menu font family', 'nm-fuzzy' ),
			  'type'      => 'select',
			  'choices' => array(
			  	'arial' => 'Arial',
			  	'Helvetica' => 'Helvetica',
			  	'sans-serif' => 'sans-serif',
			  	'Comic Sans MS' => 'Comic Sans MS'),
			  'section'   => 'header_section',
			) );

			$wp_customize->add_control( 'fuzzy_nav_menu_color', array(
			  'label'   => __( 'Set nav-menu color', 'nm-fuzzy' ),
			  'type'    => 'color',
			  'section' => 'header_section',
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fuzzy_logo_img', array(
			  'label' => __( 'Featured Home Page Image', 'nm-fuzzy' ),
			  'section' => 'header_section',
			  'mime_type' => 'image',
			) ) );
			//   ===============*********** TYPOGRPHY AREA COSTOMIZE ************============

			/**
			*** section for typography
			**/
			$wp_customize->add_section( 'typography_section', array(
			  'title' => __( 'Typography Section' ),
			  'description' => __( 'theme typography settings' ),
			  'panel' => '', // Not typically needed.
			  'priority' => 144,
			  'capability' => 'edit_theme_options',
			  'theme_supports' => '', // Rarely needed.
			) );
			
			/**
			*** addding settings
			**/
			$wp_customize->add_setting( 'fuzzy_body_font_size', array(
			  'type' => 'option',
			  'capability' => 'manage_options',
			  'default' => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );
  			
			$wp_customize->add_setting( 'fuzzy_body_font_font_family', array(
			  'type' => 'option',
			  'capability' => 'manage_options',
			  'default' => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'fuzzy_body_paragraph_line_height', array(
			  'type' => 'option',
			  'capability' => 'manage_options',
			  'default' => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );
			/**
			*** controls for typogrphy
			**/
			$wp_customize->add_control( 'fuzzy_body_font_size', array(
			  'label' => __( 'Set body font size', 'nm-fuzzy' ),
			  'type' => 'number',
			  'section' => 'typography_section',
			) );

			$wp_customize->add_control( 'fuzzy_body_font_font_family', array(
			  'label' => __( 'Set body font family', 'nm-fuzzy' ),
			  'type' => 'dropdown',
			  'section' => 'typography_section',
			) );

			$wp_customize->add_control( 'fuzzy_body_paragraph_line_height', array(
			  'label' => __( 'Set body paragraph line-height', 'nm-fuzzy' ),
			  'type' => 'number',
			  'section' => 'typography_section',
			) );

			//   ===============*********** FOOTER AREA COSTOMIZE ************============

			/**
			*** section for footer
			**/
			$wp_customize->add_section( 'footer_section', array(
			  'title' => __( 'Footer Section' ),
			  'description' => __( 'Set footer' ),
			  'panel' => '', // Not typically needed.
			  'priority' => 145,
			  'capability' => 'edit_theme_options',
			  'theme_supports' => '', // Rarely needed.
			) );
			
			/**
			*** addding settings
			**/
			$wp_customize->add_setting( 'fuzzy_footer_styling', array(
			  'type' => 'option',
			  'capability' => 'manage_options',
			  'default' => '',
			  'sanitize_callback' => 'sanitize_hex_color',
			) );
  			
			
			/**
			*** control for footer
			**/
			$wp_customize->add_control( 'fuzzy_footer_styling', array(
			  'label' => __( 'Set theme footer', 'nm-fuzzy' ),
			  'type' => 'radio',
			  'choices' => array(
			  	'radio1' => '1 column',
			  	'radio2' => '2 columns',
			  	'radio3' => '3 columns',
			  	'radio4' => '4 columns'),
			  'section' => 'footer_section',
			) );
			
		}
		add_action( 'customize_register', 'fuzzy_customize_register' );

	/**
	** ========== ENDS --- Theme customizer api block
	**/

	/**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */
function fuzzy_customizer_live_preview()
{
	wp_enqueue_script( 
		  'fuzzy-themecustomizer',			//Give the script an ID
		  get_template_directory_uri().'/js/customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional) 
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'fuzzy_customizer_live_preview' );

function fuzzy_set_live_css_in_header(){
?>
		<style type="text/css">
             #big_title_home { color:<?php echo get_theme_mod('fuzzy_big_title_color', '#000000'); ?>; }

             .navbar {background-color: <?php echo get_theme_mod('fuzzy_menu_bg_color', '#000000'); ?>;}
         </style>
<?php
}
add_action('wp_head', 'fuzzy_set_live_css_in_header');
