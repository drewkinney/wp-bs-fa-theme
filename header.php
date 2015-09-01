<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="../../favicon.ico">

    <title><?php wp_title( ' | ', TRUE, 'right'); ?> </title>

	<?php wp_head();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

  </head>



  <body data-spy="scroll" data-target="#footer-navbar" id="top">

    <nav class="navbar navbar-inverse navbar-fixed-top" id="myNavbar">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="<?php the_permalink();?>">

          	<?php the_title();?>

          </a>

        </div>

        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav">

			<!-- wp-menu here -->

				<?php 

					wp_nav_menu( 

						array( 

							'menu'				=>	'primary',

							'theme_location' 	=>  'fixed-top-menu',

							'depth'				=>	2,							

							'container'			=>	'div',

							'container_class'	=>	'collapse navbar-collapse',

							'container_id'		=>	'bs-navbar-collapse',

							'menu_class'		=>	'nav navbar-nav',

							'fallback_cb'		=>	'wp-bootstrap_navwalker::fallback',

							'walker'			=>	new wp_bootstrap_navwalker()

							// No Chuck Norris!!!!!

						) 

					);

				?>

			<!-- /wp-menu here -->

          </ul>

        </div><!--/.nav-collapse -->

      </div>

    </nav>