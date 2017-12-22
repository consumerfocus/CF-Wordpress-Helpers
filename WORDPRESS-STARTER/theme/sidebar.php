<h3>Recent Posts</h3>
<?php
$myPosts = new WP_Query();
$myPosts->query('showposts=7'); ?>
<div class="latest-news">
	<ul>
		<?php while ($myPosts->have_posts()) : $myPosts->the_post(); ?>
<li><a class="none" href="<?php echo get_permalink(); ?>">
<h3 class="h4"> <?php the_title(); ?></h3><p><?php the_date(); ?></p></a></li>
<?php endwhile;?>
    </ul>

    <a href="<?php $page=get_page_by_title('Recent news'); echo get_permalink($page->ID); ?>" class="btn btn-flash btn-block">View All</a>

</div>