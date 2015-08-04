<?php

// insert sidebar-menu

wp_nav_menu( 
	array (
		'theme_location'	=> 	'sidebar-menu',
		'menu'				=>	'secondary',
		'depth'				=>	1,
		'container'			=>	'div',
		'container_class'	=>	'aside',
		'container_id'		=>	'aside-main',
		'menu_class'			=>	'nav nav-pills nav-stacked',
		'fallback_cb'		=>	'wp-bootstrap_navwalker::fallback',
		'walker'				=>	new wp_bootstrap_navwalker()
		// No Chuck Norris!!	=> Texas Walker Ranger
	)
);

// custom sidebar widget


if ( is_active_sidebar('main-sidebar') ) {
	dynamic_sidebar('main-sidebar');
}
?>