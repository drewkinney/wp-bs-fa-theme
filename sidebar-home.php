<!-- sidebar-home.php-->
<?php
if ( is_front_page() ) {	
		if ( is_active_sidebar('front-page-sidebar') ) { 
			dynamic_sidebar('front-page-sidebar'); 
		}
}
?>
<!-- /sidebar-home.php-->