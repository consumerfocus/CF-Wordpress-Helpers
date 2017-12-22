</div>

<!-- Footer -->
<footer>
	<div class="container">
    <div class="row">
      <div class="col-sm-12">

      </div>
    </div>
  </div>
</footer>
	





	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <!-- Optionally enable responsive features in IE8 -->
    <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>

	

  	<script>
    	$('.trigger_button').dropdown();
  	</script>
    <script>
      $(function() {
          $('#MENU_ID>li').each(function() {
              if ( $(this).children('ul').size() > 0 ) {
                  $(this).prepend('<span data-target="dropdown-toggle" class="mobileCaret pull-right trigger_button" data-toggle="dropdown">▼</span>'); 
              }           
      	    });
      	});
    </script>
    <?php wp_footer(); ?> 
</body>
</html>