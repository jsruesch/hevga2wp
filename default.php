<?php
/*
 Template Name: Default
*/
?>


<?php get_header(); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mc">
    <div class="container">
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
              <div class="row pad15 bg-red">
                <h2 class="text-white"><?php the_title(); ?></h2>
              </div>
              <div class="row bg-lgrey pad15 mar20-bot">
                <?php the_content(); ?>
              </div>
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
