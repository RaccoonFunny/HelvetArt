<?php get_header(); ?>
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>
<p class="month-text">
  <?
    $current_month = date('m');
    $begin = mktime(0, 0, 0, $current_month -1, 1, date("Y"));
    echo date ("M", $begin)." 20".date("y",$begin)." Show";
  ?>
</p>
<div class="monrh-block">
  <?php
  $catquery = new WP_Query( 'cat=19&posts_per_page=1' );
  while($catquery->have_posts() ) : $catquery->the_post();
  	?>
    <div class="gallery-winner">
  	   <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
    </div>
    <?php endwhile; ?>
</div>
<hr style="padding-left: 0px; margin-top: 74px; position: absolute" width=" 70%">
<div class="resent-show">
<p class="text-header"> Recent shows</p>
<!--  -->
<div class="recent-show-post">

<?php
$catquery = new WP_Query( 'cat=19&posts_per_page=3' );
while($catquery->have_posts() ) : $catquery->the_post();
	?>
  <div class="gallery-post">
	   <p><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></p>
	   <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
  </div>
  <?php endwhile;
    wp_reset_postdata();
  ?>

</div>
<!--  -->

</div>
</div>
<div class="next-block">
<hr width="70%" style=" margin-right: inherit;">
<div class="take-part-block">
    <a href="#"><H2 class="text-header">Click here for Next Show entry</H2></a> 
</div>
</div>

<?php get_footer(); ?>
