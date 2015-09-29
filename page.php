<!-- page.php -->
<?php get_header();?>
    <div id="main-content" class="container">
<?php if (is_active_sidebar('main-sidebar')): ?>
      <div class="row"><!-- .row -->
      	<div class="col-md-8"><!-- .col-md-8 -->
<?php endif ?>
			<!-- START the Loop -->
            <div class="row">
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- the Loop -->
                    <div class="col-md-8">
                    	<header class="article-header">
                            <h2 id="post-<?php the_ID();?>">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                                 </a>
                            </h2><!-- /#post-<?php the_ID();?> -->
                        </header><!-- /.article-header -->
                        <article class="the-content">
							<?php the_content(); ?>
                        </article><!-- /.the-content -->
                        <hr class="featurette-divider">
                        <footer class="article-footer">
                            <small class="article-meta">
								<?php the_time('F jS, Y') ?> | by <?php the_author() ?>
                            </small><!-- /.article-meta -->
                        </footer><!-- /.article-footer -->
                    </div><!-- /.col-md-8 -->
                    <div class="col-md-4">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail(); ?>
                             </a>
                        <?php endif // end of 'if ( has_post_thumbnail() ) :'?>
                    </div><!-- /.col-md-4 -->
                    <hr class="col-md-12 featurette-divider">
                <?php endwhile; else: ?>
                    <p>Sorry, no posts to list</p>
                <?php endif; ?><!-- /the Loop -->
            </div><!-- /.row -->
			<!-- END the Loop -->
<?php if (is_active_sidebar('main-sidebar')): ?>
        </div><!-- /.col-md-8 -->
        <div class="col-md-4">
           		<?php get_sidebar();?><!-- <- include sidebar-home.php -->
        </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
<?php endif ?>
    </div><!-- /.container -->
      <hr>
<?php get_footer();?>
<!-- /page.php -->