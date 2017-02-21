<?php
/*
 Template Name: Fellow Bio Janet H. Murray
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_eric_z.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Janet H. Murray</h3>
            <p class="text-center"><strong>Georgia Tech</strong></p>
          </div>
        </div>
        <a href="mailto:jmurray@gatech.edu" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Janet
            </p>
          </div>
        </a>
      </div><!-- /Andrew -->
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Janet H. Murray is the author of Hamlet on the Holodeck: The Future of Narrative in Cyberspace (1997; updated edition 2017) and Inventing the Medium: Interaction Design as a Cultural Practice (2011). She taught the world's first course in interactive narrative at MIT in 1991 and one of the first humanities-based courses in Game Design at Georgia Tech in 2002, where she joined the faculty in 1999 after almost 20 years as a humanist interaction designer at MIT. She is currently Associate Dean for Research in the Ivan Allen College of Liberal Arts at Georgia Tech, and a Professor in the Graduate Program in Digital Media where she is director of the eTV lab which has recently expanded to VR storytelling.
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
