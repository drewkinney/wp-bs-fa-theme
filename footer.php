<!-- /Page Content -->

<footer class="container">



	<div class="row footer-widgets">

		<?php if(is_active_sidebar('footer-column-1')): ?>

			<div class="col-md-3"><?php dynamic_sidebar('footer-column-1'); ?></div>

		<?php endif ?>



		<?php if(is_active_sidebar('footer-column-2')): ?>

			<div class="col-md-3"><?php dynamic_sidebar('footer-column-2'); ?></div>

		<?php endif ?>



		<?php if(is_active_sidebar('footer-column-3')): ?>

			<div class="col-md-3"><?php dynamic_sidebar('footer-column-3'); ?></div>

		<?php endif ?>



		<?php if(is_active_sidebar('footer-column-4')): ?>

			<div class="col-md-3"><?php dynamic_sidebar('footer-column-4'); ?></div>

		<?php endif ?>

	</div><!-- /.row.footer-widgets -->











	<div class="pull-left">

    	<?php 

			wp_nav_menu( 

				array (

					'theme_location'	=> 	'footer-menu',

					'menu'				=>	'tertiary',

					'depth'				=>	1,

					'container'			=>	'nav',

					'container_class'	=>	'footer-menu',

					'container_id'		=>	'footer-nav',

					'menu_class'		=>	'nav nav-pills',

					'fallback_cb'		=>	'wp-bootstrap_navwalker::fallback',

					'walker'			=>	new wp_bootstrap_navwalker()

				)

			);

		

		?>

    </div>

	<div class="pull-right">

    	<p class="copyright">&copy;<?php echo date('Y');?> Drew Kinney. All rights reserved.</p>

	</div>

</footer>





<!-- External javascript -->



	<?php wp_footer();?>



<!-- /External javascript -->



</body>

</html>

<!-- END myTheme -->