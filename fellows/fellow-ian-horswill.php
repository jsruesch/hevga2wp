<?php
/*
 Template Name: Fellow Bio Ian Horswill
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_ian_h.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Ian Horswill</h3>
            <p class="text-center"><strong>Northwestern University</strong></p>
          </div>
        </div>
        <!-- <a href="mailto:ian@northwestern.edu" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Ian
            </p>
          </div>
        </a> -->
      </div><!-- /Andrew -->
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Ian Horswill is an Associate Professor of Computer Science at Northwestern University, where he was the co-founder of Northwestern’s Animate Arts Program. His research interests include interactive entertainment technologies and cognitive modeling for virtual characters, particularly modeling of emotion and personality. He received his PhD in Computer Science from the Massachusetts Institute of Technology in 1993.
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
