<?php
	if (! function_exists ( 'nm_business_casual' )) :

		/** 
		***	Function called on theme activation
		*** Main function for theme that contain's diffrent functions
		**/
		function nm_business_casual(){
			/**
			***  Set up the content width value based on the theme's design and stylesheet.
			**/
			if (! isset ( $content_width )){
				global $content_width;
				$content_width = 800;
			}

			/** 
			***	Let WordPress manage the document title	
			*** By adding theme support, we declare that this theme does not use a
			*** hard-coded <title> tag in the document head, and expect WordPress to
			*** provide it for us.
			**/
			add_theme_support('title-tag');

			/** 
			***	register nav manu for theme	
			***  register_nav_menus( array( '$location' => __( '$discription', 'theme_slug') , ) );
			**/
			register_nav_menus(
				array(
					'primary' => __( 'Primary Menu', 'business-casual' ),
				)
			);
			require_once('includes/wp_bootstrap_navwalker.php');

			/**
			*** Make theme available for translation. Translations can be filed in the /languages/ directory.
			**/
			load_theme_textdomain ( 'nm-blogo', get_template_directory () . '/languages' );

			/**
			*** Add default posts and comments RSS feed links to head.
			**/
			add_theme_support ( 'automatic-feed-links' );
			/**
			*** Enable support for Post Thumbnails on posts and pages. @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
			**/
			add_theme_support ( 'post-thumbnails' );
			set_post_thumbnail_size( 200, 200, true );
			/**
			*** Switch default core markup for search form, comment form, and comments
			*** to output valid HTML5.
			**/
			add_theme_support( 'html5', array(
				'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );
			
			/**
			*** the_excerpt Settings
			**/
			// 
			remove_filter ( 'the_excerpt', 'wpautop' );
			/**
			*** Setup the WordPress core custom background feature.
			**/
			add_theme_support ( 'custom-background', apply_filters ( 'nm_slice_custom_background_args', array (
				'default-color' => 'F2F2F2',
				'default-image' => '' 
			) ) );


		}
	endif;
		add_action('after_setup_theme', 'nm_business_casual');


	if (! function_exists ( 'nm_business_casual_widgets' )) :
		/**
		*** widgets the theme
		**/
		function nm_business_casual_widgets(){
			register_sidebar(array ( 
			'name' => __( 'Main Sidebar', 'daster' ),
			'id' => 'right-sidebar',
			'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'business_casual' ),
			'before_title' 	=> '<h3">',
			'after_title' 	=> '</h3>',
			'before_widget'=> '<div class="nm_widget_box">',
			'after_widget'=> '</div>',		
			) );
	
			for ($i=1; $i <= 4 ; $i++) { 
				register_sidebar( 
				array(
					'name' => "Footer Widget $i",
					'id' => 'footer-w-'.$i,
					'description' => __( 'This is footer widget '.$i, 'nm_business_casual' ),
					'before_widget' => '<div class="nm_widget_box">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));				
			}	
		}
	endif;
	add_action( 'widgets_init', 'nm_business_casual_widgets' );

	/** 
	***	Adding scripts and style to theme	
	**/
	function nm_business_scripts(){
		/**
		*** theme main css and jquery
		*** css/business-casual.css
		*** js/scripts.js
		**/
		wp_enqueue_style('main-css', get_stylesheet_uri());
		wp_enqueue_style('custom-css',get_template_directory_uri().'/css/business-casual.css');
		wp_enqueue_script('jquery');
		wp_enqueue_script('script-js', get_template_directory_uri().'/js/scripts.js', array('jquery','bootstrap-js'));
		
		/**
		*** theme bootstrap css and script
		*** css/bootstrap.min.css
		*** js/bootstrap.min.js
		**/
		wp_enqueue_style('bs-css', get_template_directory_uri().'/css/bootstrap.min.css');
		wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'));

		/**
		*** theme fonts css 
		*** http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800
		*** http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic
		**/
		wp_enqueue_style('atalic-font-css', "http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
		wp_enqueue_style('latin-font-css', "http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic");


	
	}

	add_action('wp_enqueue_scripts', 'nm_business_scripts');

	function fuzzy_customizer_scripts_register(){

		/**
		** Customizer API JS
		**/
		wp_enqueue_script( 'fuzzy_customizer_script', get_template_directory_uri() . '/js/customizer.js', array("jquery"), '202021', true  );
	}
	
	add_action( 'customize_controls_enqueue_scripts', 'fuzzy_customizer_scripts_register' );

	
	/**
	*** excerpt styling (paragraph ending style)
	**/
	function excerpt_style( $more ) {
		return '  .....';
	}
	add_filter('excerpt_more',('excerpt_style'));

	/**
	*** excerpt length (paragraph words lenght)
	**/
	function custom_excerpt_length( $length ) {
	return 30;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

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