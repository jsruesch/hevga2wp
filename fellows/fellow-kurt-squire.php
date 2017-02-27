<?php
/*
 Template Name: Fellow Bio Kurt Squire
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_kurt.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Kurt Squire</h3>
            <p class="text-center"><strong>University of California, Irvine</strong></p>
          </div>
        </div>
        <!-- <a href="mailto:ksquire@uci.edu" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Kurt
            </p>
          </div>
        </a> -->
      </div><!-- /Andrew -->
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Kurt Squire's research focuses on the design of game-based learning environments. He is the author or editor of 3 books, over 100 scholarly publications, and directed several award-winning game-based learning projects. Squire's research has been funded by private and public partners ranging from Microsoft Games to the National Science Foundation. Squire's students have gone on to create ARIS,  Filament Games, and dozens of projects and companies.
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
