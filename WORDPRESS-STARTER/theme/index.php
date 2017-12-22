<?php get_header(); ?>	
<!-- Page Content  -->
	<div class="container mainContent fadein">
		<div class="row">
			<div class="col-sm-12">
				<h1>Latest News</h1>
			</div>
		</div>
		<div class="row">
				<div class="col-md-8">
				<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
     
			        <h2 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><h3><span class="post-date"><?php the_date(); ?></span></h3>

			          <div class="entry" style="margin-bottom: 30px;">
			            <?php the_excerpt(); ?>
			            <a class="btn btn-flash" href="<?php echo get_permalink(); ?>">Read More...</a>
			            <div class="clear"></div>
			          </div>
	            <?php endwhile; ?>				
				</div>
				<div class="col-md-4">
					<div class="well wellBoarder">
						<?php get_sidebar(); ?>
					</div>
				</div>
        <?php else : ?>
						<h2>Not Found</h2>
						<p>Sorry, but you are looking for something that isn't here.</p>
				<?php endif; ?>
			</div>
		</div>
<?php get_footer(); ?>	