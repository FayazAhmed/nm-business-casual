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
			*** setting header image
			**/
			$header_image = array (
				'uploads' => true 
			);
			add_theme_support ( 'custom-header', $header_image );
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