<!-- /Page Content -->
<footer>
	<div class="pull-left">
    	<?php wp_nav_menu( array ('theme_location' => 'footer-menu') );?>
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