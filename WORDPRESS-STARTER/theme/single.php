<?php get_header(); ?>
<!-- Page Content  -->
	<div class="container mainContent">
		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="post-title">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	<div class="row">
		<div class="col-md-8">	
			<div class="post">
				<h3><span class="post-date"><?php the_date(); ?></span></h3>

				<div class="entry" style="margin-bottom: 30px;">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				
			</div>

		<?php endwhile; ?>
		<div class="navigation">
				<span class="previous-entries"><?php next_posts_link('Older Entries') ?></span>
				<span class="next-entries"><?php previous_posts_link('Newer Entries') ?></span>
			</div>

	<?php else : ?>
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>
		</div>
		<div class="col-md-4">
			<div class="well">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>