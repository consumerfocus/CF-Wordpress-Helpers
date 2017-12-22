<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Consumer Focus Marketing">
 
    <!-- Le styles -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css?v=4" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/style.css?v=310" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->

 <!-- Fav and touch icons -->
  <!--   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/ico/favicon.png"> -->

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>	
  <header >
      <div class="container">
        <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                  <button type="button" id="toggler"class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mynav-collapse">
                    MENU &nbsp;<span class="glyphicon glyphicon-chevron-down"></span>
                  </button>
                </div>
                <?php
                /** Loading WordPress Custom Menu  **/
                wp_nav_menu( array(
                  'menu'              => 'main-menu',
                  'theme_location'    => 'main-menu',
                  'depth'             => 3,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse navbar-mynav-collapse',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
            </div><!-- /navbar -->
      </div>
</header>