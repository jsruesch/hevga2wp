<?php
/*
 Template Name: Bio Andrew
*/
?>


<?php get_header(); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mc">
    <div class="container">
      <!-- Andrew -->
      <div class="col-md-3">
        <div class="row pad20 bg-green">
          <div class="row">
            <img src="/hevga2wp/wp-content/themes/hevga/img/portraits/portrait_andrew.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Andrew Phelps</h3>
            <p class="text-center"><strong>Rochester Institute of Technology</strong></p>
            <p class="text-center">Treasurer</p>
          </div>
        </div>
        <a href="#">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Andrew
            </p>
          </div>
        </a>
      </div><!-- /Andrew -->
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <?php query_posts('category_name=andrew');?>
    		<?php if (have_posts()) : ?>
    				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    				<?php /* If this is a category archive */ if (is_category()) { ?>
    				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    					<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
    				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    					<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
    				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    					<h2>Archive for <?php the_time('F, Y'); ?></h2>
    				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    					<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
    				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
    					<h2 class="pagetitle">Author Archive</h2>
    				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    					<h2 class="pagetitle">Blog Archives</h2>
    				<?php } ?>
    				<?php while (have_posts()) : the_post(); ?>
              <!-- The Content -->
      				<div <?php post_class() ?>>
                <p>
                  <?php the_content(); ?>
                </p>
              </div><!-- /The Content -->
            <?php endwhile; ?>
            <?php else : ?>
              <h2>Nothing found</h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
