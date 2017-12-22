<!-- 
You probably already have what is below in your starter template, so just add the css!
 -->

<header >
  <div class="container">
    <div class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" id="toggler"class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mynav-collapse">
                MENU &nbsp;<span class="glyphicon glyphicon-chevron-down"></span>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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