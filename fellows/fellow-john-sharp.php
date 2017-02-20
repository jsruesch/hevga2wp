<?php
/*
 Template Name: Fellow Bio John Sharp
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_none.gif" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Eric Klopfer</h3>
            <p class="text-center"><strong>Rochester Institute of Technology</strong></p>
          </div>
        </div>
        <a href="mailto:klopfer@mit.edu" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Eric
            </p>
          </div>
        </a>
      </div><!-- /Andrew -->
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Klopfer is Professor and Director of The Education Arcade and Scheller Teacher Education Program at MIT.  Klopfer's research focuses on the development and use of computer games and simulations for building understanding of science, technology, engineering and mathematics. The games that he works on are designed to build understanding of scientific practices and concepts as well as critical knowledge, using both mobile and web-delivered game platforms.  In the realm of simulations, Klopfer's work focuses on students understanding complex systems through, and connecting computer programming with scientific practice, critical thinking, and real-world issues.
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
