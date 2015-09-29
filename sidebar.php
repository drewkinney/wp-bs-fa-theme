<!-- sidebar.php-->
<?php
get_template_part( 'assets/php/secondary-menu' ); 

if ( is_active_sidebar('main-sidebar') ) {
		dynamic_sidebar('main-sidebar');
	}
?>
<!-- /sidebar.php-->