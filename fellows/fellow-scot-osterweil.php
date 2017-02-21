<?php
/*
 Template Name: Fellow Bio Scot Osterweil
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_scot.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Scot Osterweil</h3>
            <p class="text-center"><strong>MIT</strong></p>
          </div>
        </div>
        <a href="mailto:scot_o@mit.edu" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Scot
            </p>
          </div>
        </a>
      </div><!-- /Andrew -->
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Scot Osterweil is Creative Director of the Education Arcade and the Game Lab in the MIT Comparative Media Studies Program. He has designed games in both academic and commercial environments.  Designs include the acclaimed Zoombinis series (math and logic), Vanished: The MIT/Smithsonian Game (environmental science), Labyrinth (math), Kids Survey Network (data and statistics), Caduceus (medicine), and iCue (history).  He is a founder and Creative Director of Learning Games Network (www.learninggamesnetwork.org) where he led the Gates Foundation’s Language Learning Initiative (ESL), and where he designed Quandary, named Game of the Year at the 2013 Games for Change festival.
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
