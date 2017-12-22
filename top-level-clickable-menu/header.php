<!-- 
Line 20 is probably all you need to change in your current theme!!

Make sure you change the name on line 7 of script.js to what you choose for line 22 of this file!!!
 -->

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
              'menu_id'           => '*******MENU-ID******',
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse navbar-mynav-collapse',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
        </div><!-- /navbar -->
  </div>