<?php
/*
 Template Name: Article Writeups Archive Page
*/
?>


<?php get_header(); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mc">
    <div class="container">
      <div class="col-sm-9 pad15-right">
        <!-- Latest News Goodies -->
        <div class="row pad15 bg-red">
          <h4 class="text-white">Articles</h4>
        </div>
        <div class="row bg-lgrey pad15-left pad15-right mar20-bot">
          <?php query_posts('post_type=article_writeups');?>
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
                  <div class="row featured-image-excerpt mar20-top">
                    <a href="<?php the_permalink() ?>">
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      }?>
                    </a>
                  </div>
                  <div class="row pad15 bg-lgrey mar20-bot">
                    <h3 class="text-dblue"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <p>
                      <?php the_content( $more_link_text , $strip_teaser ); ?>
                    </p>
                  </div>
                </div><!-- /The Content -->
              <?php endwhile; ?>
              <?php else : ?>
                <h2>Nothing found</h2>
          <?php endif; ?>
        </div><!-- Latest News Goodies -->
      </div>
      <!--
        Sidebar
      -->
        <div class="col-sm-3">
          <!-- Section Buttons -->
          <a href="../article-writeups-archive-page">
            <div class="row pad15 bg-dblue b-link">
              <h4 class="text-center text-white">Featured Articles</h4>
            </div>
          </a>
          <a href="../press-releases-archive-page">
            <div class="row pad15 bg-lblue b-link">
              <h4 class="text-center text-white">Press Releases</h4>
            </div>
          </a>
          <a href="../news-links-archive-page">
            <div class="row pad15 bg-green mar20-bot b-link">
              <h4 class="text-center text-white">News Links</h4>
            </div>
          </a><!-- Section Buttons -->
          <!-- Media Contact -->
          <div class="row pad15 bg-black">
            <h4 class="text-white">Media Contact</h4>
          </div>
          <div class="row bg-lgrey pad15 mar20-bot">
            <p>
              <strong>Firstname Lastname</strong><br/>
              title<br/>
              <a href="mailto:" target="_blank">email@email.com</a><br/>
              555-555-555<br/>
            </p>
          </div><!-- Media Contact -->
          <!-- Press Kit -->
          <div class="row pad15 bg-black">
            <h4 class="text-white">Press Kit</h4>
          </div>
          <div class="row bg-lgrey pad15 mar20-bot">
          </div><!-- Press Kit -->
          <!-- Latest Tweets -->
          <div class="row pad15 bg-lblue">
            <h4 class="text-white"><i class="fa fa-twitter-square text-white" aria-hidden="true"></i> Latest Tweets</h4>
          </div>
          <div class="row mar20-bot">
            <a class="twitter-timeline" data-height="550" href="https://twitter.com/HigherEdGames">Tweets by HigherEdGames</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div><!-- Latest Tweets -->
        </div>
        <!-- Sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
