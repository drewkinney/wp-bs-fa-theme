<?php

////////////////////////////////////////

////////////////////////////////////////

//									  //

//			myTheme Styles			  //

//									  //

////////////////////////////////////////

////////////////////////////////////////




////////////////////////////////////////

////////////////////////////////////////

//		ENQUEUE JS & CSS


	function myTheme_scripts_styles(){

		// Register Styles

		wp_register_style('myTheme-bs-css', 'assets/bootstrap/css/bootstrap-theme.min.css', false , '3.3.5');

		wp_register_style('myTheme-fa-css', 'assets/font-awesome-4.4.0/css/font-awesome.min.css', array( 'myTheme-bs-css' ) , '4.3.0');

		wp_register_style('myTheme-css', get_template_directory_uri().'/style.css', '' , '1.0');

		// Register Scripts

		wp_register_script('myTheme-bs-js', 'assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
	
		wp_register_script('myTheme-jqv-js', 'assets/jquery-validation-1.14.0/jquery.validate.min.js', array('jquery'), '3.3.5', true );

		wp_register_script('myTheme-js', 'assets/js/script.js', array('jquery', 'myTheme-bs-js'), '1.0', true );

		// Enqueue Styles

		wp_enqueue_style('myTheme-bs-css');

		wp_enqueue_style('myTheme-fa-css');

		wp_enqueue_style('myTheme-css');

		// Enqueue Scripts

		wp_enqueue_script('myTheme-bs-js');
	
		wp_enqueue_script('myTheme-jqv-js');

		wp_enqueue_script('myTheme-js');

	}

	// Hook into wp_enqueue_scripts action

	add_action('wp_enqueue_scripts','myTheme_scripts_styles');



//		/ENQUEUE JS & CSS

////////////////////////////////////////

////////////////////////////////////////





////////////////////////////////////////

////////////////////////////////////////

//		CUSTOM MENUS



	// Include Bootstrap Nav-Walker from Github

	require_once("assets/php/wp_bootstrap_navwalker.php");



	// Register Nav menus

	register_nav_menus( 

		array(

			'primary-menu'	=> __( 'Primary Menu', 'myTheme' ),

			'secondary-menu' 		=> __( 'Secondary Menu', 'myTheme' ),

			'tertiary-menu' 		=> __( 'Tertiary Menu', 'myTheme' )

		)

	);

//		/CUSTOM MENUS

////////////////////////////////////////

////////////////////////////////////////

	

////////////////////////////////////////

////////////////////////////////////////

//		CUSTOM SIDEBARS

	

	function custom_sidebars(){

	

		$args = array(

			'id' 			=> 	'main-sidebar',

			'class'			=>	'main-sidebar',

			'name'			=>	__( 'main-sidebar', 'myTheme' ),

			'description'	=>	__( ' Main Sidebar for 2-col Layouts', 'myTheme' ),

			'before_title'	=>	'<h3 class="sidebar-heading">',

			'after_title'	=>	'</h3>',

		);

		register_sidebar( $args );



		$args = array(

			'id' 			=> 	'front-page-sidebar',

			'class'			=>	'front-page-sidebar',

			'name'			=>	__( 'front-page-sidebar', 'myTheme' ),

			'description'	=>	__( ' Front Page Sidebar for 2-col Layouts', 'myTheme' ),

			'before_title'	=>	'<h3 class="sidebar-heading">',

			'after_title'	=>	'</h3>',

		);

		register_sidebar( $args );



		$args = array(

			'id' 			=> 	'single-sidebar',

			'class'			=>	'single-sidebar',

			'name'			=>	__( 'single-sidebar', 'myTheme' ),

			'description'	=>	__( ' Single Post Sidebar for 2-col Layouts', 'myTheme' ),

			'before_title'	=>	'<h3 class="sidebar-heading">',

			'after_title'	=>	'</h3>',

		);

		register_sidebar( $args );

		

		

		

		$args = array(

			'id' 			=> 	'footer-column-1',

			'class'			=>	'footer-column',

			'name'			=>	__( 'footer-column-1', 'myTheme' ),

			'description'	=>	__( 'footer-column-1', 'myTheme' ),

			'before_title'	=>	'<header class="footer-column-header">',

			'after_title'	=>	'</header>',

			'before_widget'	=>	'<aside id="%1$s" class="block %2$s">',

			'after_widget'	=>	'</aside>'

		);

		register_sidebar( $args );

		

		

		

		$args = array(

			'id' 			=> 	'footer-column-2',

			'class'			=>	'footer-column',

			'name'			=>	__( 'footer-column-2', 'myTheme' ),

			'description'	=>	__( 'footer-column-2', 'myTheme' ),

			'before_title'	=>	'<header class="footer-column-header">',

			'after_title'	=>	'</header>',

			'before_widget'	=>	'<aside id="%1$s" class="block %2$s">',

			'after_widget'	=>	'</aside>'

		);

		register_sidebar( $args );

		

			$args = array(

			'id' 			=> 	'footer-column-3',

			'class'			=>	'footer-column',

			'name'			=>	__( 'footer-column-3', 'myTheme' ),

			'description'	=>	__( 'footer-column-3', 'myTheme' ),

			'before_title'	=>	'<header class="footer-column-header">',

			'after_title'	=>	'</header>',

			'before_widget'	=>	'<aside id="%1$s" class="block %2$s">',

			'after_widget'	=>	'</aside>'

		);

		register_sidebar( $args );

	

			$args = array(

			'id' 			=> 	'footer-column-4',

			'class'			=>	'footer-column',

			'name'			=>	__( 'footer-column-4', 'myTheme' ),

			'description'	=>	__( 'footer-column-4', 'myTheme' ),

			'before_title'	=>	'<header class="footer-column-header">',

			'after_title'	=>	'</header>',

			'before_widget'	=>	'<aside id="%1$s" class="block %2$s">',

			'after_widget'	=>	'</aside>'

		);

		register_sidebar( $args );

	

		

	}

	add_action( 'widgets_init', 'custom_sidebars');



//		/CUSTOM SIDEBARS

////////////////////////////////////////

////////////////////////////////////////







////////////////////////////////////////
////////////////////////////////////////
//		THEME SUPPORT

// Register Theme Features
//		function custom_theme_features()  {
//			add_theme_support( 'automatic-feed-links' );
//			add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
//			add_theme_support( 'title-tag' );
//		}
//	add_action( 'after_setup_theme', 'custom_theme_features' );

//		/THEME SUPPORT
////////////////////////////////////////
////////////////////////////////////////



?>