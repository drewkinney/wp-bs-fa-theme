<?php
wp_nav_menu( 
	array (
		'theme_location'	=> 	'secondary-menu',
		'menu'				=>	'secondary',
		'depth'				=>	1,
		'container'			=>	'div',
		'container_class'	=>	'aside',
		'container_id'		=>	'aside-main',
		'menu_class'			=>	'nav nav-pills',
		'fallback_cb'		=>	'wp-bootstrap_navwalker::fallback',
		'walker'				=>	new wp_bootstrap_navwalker() // No Chuck Norris!!
	)
);
>