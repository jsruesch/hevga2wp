<?php
/*
 Template Name: Home Page
*/
?>


<?php get_header(); ?>

<!--
  BEGIN: Carousel
-->
  <div class="container-fluid mar20-bot">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <a href="/news">
            <div class="cslide slide-bg-steamjobs"></div>
            <div class="carousel-caption mar10-bot">
              <p class="text-dblue">Correct the record on the importance of video game programs at our colleges and universities</p>
            </div>
          </a>
        </div>
        <div class="item">
            <div class="cslide slide-bg-06"></div>
            <div class="carousel-caption mar10-bot">
              <h3 class="text-yellow">Member Meeting -Save the Date!</h3>
              <p>
              February 26 - GDC, San Francisco
              </p>
            </div>
        </div>
        <div class="item">
          <a href="/article_writeups/article-writeup-01/">
            <div class="cslide slide-bg-05"></div>
            <div class="carousel-caption mar10-bot">
              <h3 class="text-yellow">HEVGA President Constance Steinkhueler</h3>
              <p>
                Spoke at at Event during Democratic National Convention on <strong>"The Future of Video Games, Interactive Media & Play</strong>"
              </p>
            </div>
          </a>
        </div>
        <!-- <div class="item">
          <a href="<?php echo get_template_directory_uri(); ?>/assets/AARP-and-ESA-Announce-UCSC’s-Trainwreck-Games-as-Winner-of-Social-Connection-GameJam.pdf" target="_blank">
            <div class="cslide slide-bg-02"></div>
            <div class="carousel-caption mar10-bot">
              <h3 class="text-yellow">AARP & ESA Game Jam Winner</h3>
              <p>
                AARP & ESA announce UCSC's Trainwreck Games as winner of Social Connection Game Jam Competition at E3 2016
              </p>
          </div>
          </a>
        </div> -->
        <div class="item">
          <a href="https://www.facebook.com/hevga/?fref=ts" target="_blank">
            <div class="cslide slide-bg-04"></div>
            <div class="carousel-caption mar10-bot">
              <h3 class="text-yellow">Like us on Facebook</h3>
              <p>
                Stay up to date with what's going on at HEVGA!
              </p>
            </div>
          </a>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<!-- END: Carousel -->

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid">
    <div class="container">
      <div class="row mar20-bot">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/HEVGA_6-15-15des2.pdf" target="_blank" class="b-link">
          <div class="col-sm-6 pad20 bg-lblue">
            <h3 class="text-center text-white">"Priming the Pump"</h3>
            <p class="text-center text-white">The second Higher Education Video Game Alliance Survey</p>
          </div>
        </a>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/2015_HEVGA_Survey_Results.pdf" target="_blank" class="b-link">
          <div class="col-sm-6 pad20 bg-dblue">
            <h3 class="text-center text-white">"Our State of Play"</h3>
            <p class="text-center text-white"> March 2015 Survey on Game-Based Programs in Higher Ed</p>
          </div>
        </a>
      </div>
      <!-- Mission -->
      <div class="row mar20-bot">
        <div class="row pad15 bg-red">
          <h2 class="text-white">Our Mission</h2>
        </div>
        <div class="row pad15 bg-lgrey">
          <p>Our mission is to create a platform for higher education leaders which will underscore the cultural, scientific,
             and economic importance of video game programs in colleges and universities. The key is to create a robust
              network of resources--including unified advocacy, policymaker engagement, media coverage, and external
              funding--in order to incubate and harness the impact of this community in a 21st century learning environment.</p>
        </div>
      </div><!-- /Mission -->
      <!-- Certification and Industry Map -->
      <div class="row mar20-bot">
        <a href="http://www.theesa.com/about-esa/courses-certificates-degree-programs/" target="_blank" class="b-link">
          <div class="col-sm-6">
            <div class="full pad10 bg-green">
              <h3 class="text-white text-center">Certification and Degree <br/> Programs</h3>
            </div>
          </div>
        </a>
        <a href="/hevga2wp/usa-map" class="b-link">
          <div class="col-sm-6">
            <div class="full pad10 bg-yellow">
              <h3 class="text-white text-center">Industry <br/> Map</h3>
            </div>
          </div>
        </a>
      </div><!-- /Certification and Industry Map -->
      <!-- News -->
      <div class="row mar20-bot">
        <div class="row pad15 bg-black">
          <h2 class="text-white">Recent News and Events</h2>
        </div>
        <div class="row bg-lgrey">
          <div class="row">
            <table class="col-sm-12">

              <?php query_posts('post_type=news_link&posts_per_page=5');?>

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

    								<div <?php post_class() ?>>

    									<tr>
    										<td class="col-sm-3 pad10 bg-dblue"><h4 class="text-center text-white"><?php the_title(); ?></h4></td>
    										<td class="col-sm-9 pad10 bg-lgrey"><p><?php the_content(); ?></p></td>
    									</tr>

    								</div>

    								<?php endwhile; ?>
    							<?php else : ?>
    								<h2>Nothing found</h2>
    							<?php endif; ?>

            </table>
          </div>
        </div>
        <a href="/hevga2wp/news" class="b-link">
          <div class="row pad10 bg-mgrey">
            <h5 class="text-center text-black">- See Full Archive -</h5>
          </div>
        </a>
      </div><!-- /News -->
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
