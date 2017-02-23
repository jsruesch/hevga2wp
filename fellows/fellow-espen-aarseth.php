<?php
/*
 Template Name: Fellow Bio Espen Aarseth
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_espen.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Espen Aarseth</h3>
            <p class="text-center"><strong>The IT University of Copenhagen</strong></p>
          </div>
        </div>
        <!-- <a href="mailto:aarseth@itu.dk" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Espen
            </p>
          </div>
        </a> -->
      </div><!-- /Andrew -->
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Espen Aarseth is professor of game studies and head of the Center for Computer Games Research at the IT University of Copenhagen. He holds a Cand.Philol. in comparative literature and a Dr.Art. in humanistic informatics, both from the University of Bergen. He is co-founding Editor-in-Chief of the journal Game Studies (2001-), and an ERC Advanced Grant Laureate for the project MSG – Making Sense of Games (2016-2021).
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
