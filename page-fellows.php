<?php
/*
 Template Name: Fellows
*/
?>


<?php get_header(); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mc">
    <div class="container">
      <!-- Fellows -->
      <div class="row mar20-bot">
        <div class="row pad15 bg-lblue">
          <h2 class="text-white">HEVGA FELLOWS</h2>
        </div>
        <div class="row bg-lgrey">
          <!-- Eric Klopfer -->
          <a href="/hevga2wp/fellow-eric-klopfer/">
            <div class="col-sm-6 col-md-4 pad20 ec-profile">
              <div class="row">
                <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_none.gif" class="center-block"/>
              </div>
              <div class="row mar15-top">
                <h4 class="text-dblue text-center">Eric Klopfer</h4>
                <p class="text-center"><strong>MIT</strong></p>
              </div>
            </div>
          </a><!-- END: Eric Klopfer -->
          <!-- John Sharp -->
          <a href="/hevga2wp/fellow-sharp/">
            <div class="col-sm-6 col-md-4 pad20 ec-profile">
              <div class="row">
                <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_none.gif" class="center-block"/>
              </div>
              <div class="row mar15-top">
                <h4 class="text-dblue text-center">John Sharp</h4>
                <p class="text-center"><strong>The New School</strong></p>
              </div>
            </div>
          </a><!-- END: John Sharp -->
        </div><!-- /.row -->
      </div><!-- END: Fellows -->
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
