<!-- 
If you need to use custom fields from another page use get_field('slider', page-id)
 -->


<div class="carousel">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <?php $row = 1; if(get_field('slider')): ?>
      <?php while(has_sub_field('slider')): ?>
          <div class="item <?php if($row == 1) { echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('image'); ?>');">
          	<div class="container">
          		<div class="row">
          			<div class="col-sm-6 text-center col-sm-offset-3">
          				<?php the_sub_field('content'); ?>
          			</div>
          		</div>
          	</div>
   
          </div>

      <?php $row++; endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="container hidden-xs">
        <ol class="carousel-indicators">
          <?php $row = 0; if(get_field('carousel')): ?>
           <?php while(has_sub_field('carousel')): ?>
             <li data-target="#carousel1" id="carousel-selector-<?php echo $row; ?>" data-slide-to="<?php echo $row; ?>" class="<?php if($row == 0) { echo 'active'; } ?>" >   </li>   
           <?php $row++; endwhile; ?>
         <?php endif; ?>
       </ol>
    </div>
  </div> 
</div>
