<!-- footer.php-->
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
	</div><!-- /.footer-widgets -->
	<div class="pull-left tertiary-menu">
		  	<?php get_template_part( 'assets/php/tertiary-menu' ); ?>
    </div><!-- /.tertiary-menu -->
	<div class="pull-right">
    	<p class="copyright">&copy;<?php echo date('Y');?><?php wp_title( ); ?>. All rights reserved.</p>
	</div>
</footer>
<?php wp_footer();?>
</body>
</html>
<!-- /footer.php -->