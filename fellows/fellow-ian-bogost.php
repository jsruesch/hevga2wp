<?php
/*
 Template Name: Fellow Bio Ian Bogost
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_ian.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Ian Bogost</h3>
            <p class="text-center"><strong>Georgia Institute of Technology</strong></p>
          </div>
        </div>
        <!-- <a href="mailto:ibogost@gatech.edu" target="_blank">
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
          Ian Bogost is an author and an award-winning game designer. He is Ivan Allen College Distinguished Chair in Media Studies and Professor of Interactive Computing at the Georgia Institute of Technology, where he also holds an appointment in the Scheller College of Business. Bogost is also Founding Partner at Persuasive Games LLC, an independent game studio, and a Contributing Editor at The Atlantic.
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
