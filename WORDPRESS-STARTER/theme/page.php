<?php get_header(); ?>
<!-- Page Content  -->
	<div class="container mainContent">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				 <?php
                      // check if the flexible content field has rows of data
                      if( have_rows('layout') ):
          
                           // loop through the rows of data
                          while ( have_rows('layout') ) : the_row();
                              if( get_row_layout() == '8-4' ){ 
                              	echo '<div class="row">';
                                ?>
                                <div class="col-sm-8">
                                	<?php the_sub_field('left_content')?>
                                </div>
                                <div class="col-sm-4">
                                	<?php the_sub_field('right_content')?>
                                </div>
                              <?php wp_reset_postdata(); ?>
                              <?php
                              echo '</div>';
                              }

                              if( get_row_layout() == 'text_pic' ){
                             	echo '<div class="row">';
                                ?>
                                <div class="col-sm-8">
                                	<?php the_sub_field('left_content1')?>
                                </div>
                                <div class="col-sm-4 textPic">
                                	<img style="width: 100%" src="<?php the_sub_field('right_image')?>" alt="Barber Oil Company">
                                </div>
                              <?php wp_reset_postdata(); ?>
                              <?php
                              echo '</div>'; }

                              if( get_row_layout() == 'full_width' ){
                             	echo '<div class="row">';
                                ?>
                                <div class="col-sm-12">
                                	<?php the_sub_field('full_content')?>
                                </div>
                              <?php wp_reset_postdata(); ?>
                              <?php
                              echo '</div>'; }


                              if( get_row_layout() == '6-6' ){
                              echo '<div class="row">';
                                ?>
                                <div class="col-sm-6">
                                  <?php the_sub_field('left_content2')?>
                                </div>
                                <div class="col-sm-6">
                                  <?php the_sub_field('right_content2')?>
                                </div>
                              <?php wp_reset_postdata(); ?>
                              <?php
                              echo '</div>'; }


                              if( get_row_layout() == '4-8' ){
                              echo '<div class="row">';
                                ?>
                                <div class="col-sm-4">
                                  <?php the_sub_field('left_content3')?>
                                </div>
                                <div class="col-sm-8">
                                  <?php the_sub_field('right_content3')?>
                                </div>
                              <?php wp_reset_postdata(); ?>
                              <?php
                              echo '</div>'; }


                              if( get_row_layout() == '9-3' ){
                              echo '<div class="row">';
                                ?>
                                <div class="col-sm-9">
                                  <?php the_sub_field('left_content4')?>
                                </div>
                                <div class="col-sm-3">
                                  <?php the_sub_field('right_content4')?>
                                </div>
                              <?php wp_reset_postdata(); ?>
                              <?php
                              echo '</div>'; }

                          endwhile;endif;?>


			<?php endwhile; endif; ?>
	</div><!-- /mainContent -->
<?php get_footer(); ?>	

