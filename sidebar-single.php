<!-- sidebar-single.php-->
<?php
get_template_part( 'assets/php/secondary-menu' ); 

if ( is_active_sidebar('single-sidebar') ) { 
	dynamic_sidebar('single-sidebar'); 
}
?>
<!-- /sidebar-single.php-->