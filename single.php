<?php get_header(); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mc">
    <div class="container">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- Featured Image -->
			<div class="row featured-image-excerpt">
				<?php echo get_the_post_thumbnail( $page->ID, 'post_thumbnail' ); ?>
			</div><!-- Featured Image -->

			<div class="row" <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<!-- Title and Meta -->
				<div class="row pad15 bg-lblue">
					<h2 class="text-white"><?php the_title(); ?></h2>
				</div><!-- Title and Meta -->
				<!-- Entry -->
				<div class="entry row pad15 bg-lgrey">
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					<?php the_tags( 'Tags: ', ', ', ''); ?>
				</div><!-- Entry -->
				<!-- Edit This Entry -->
				<div class="row pad15-top">
					<?php edit_post_link('Edit this entry','','.'); ?>
				</div><!-- Edit This Entry -->
			</div>
		<?php endwhile; endif; ?>

	</div><!-- /.container -->
</div><!-- /.container-fluid -->

<?php get_footer(); ?>
