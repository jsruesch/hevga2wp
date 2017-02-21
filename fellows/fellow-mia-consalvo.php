<?php
/*
 Template Name: Fellow Bio Mia Consalvo
*/
?>


<?php get_header(); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mc">
    <div class="container">
      <div class="col-md-3">
        <div class="row pad20 bg-green">
          <div class="row">
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_mia.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Mia Consalvo</h3>
            <p class="text-center"><strong>Concordia University</strong></p>
          </div>
        </div>
        <a href="mailto:mia.consalvo@concordia.ca" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Mia
            </p>
          </div>
        </a>
      </div>
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Mia Consalvo is Professor of Communication Studies and Canada Research Chair in Game Studies and Design at Concordia University. She has most recently published the book Atari to Zelda: Japan's Videogames in Global Context, about Japan's influence on the videogame industry and game culture. She is also the co-author of Players and their Pets, co-editor of Sports Videogames and author of Cheating: Gaining Advantage in Videogames.<br /><br />
          Mia runs the mLab, a space dedicated to developing innovative methods for studying games and game players, and she is currently serving as Director of the Centre for Technoculture, Art & Games (TAG) at Concordia. She has given more than 100 presentations at professional as well as academic conferences including regular presentations at the Game Developers Conference. She is the former president of the Digital Games Research Association, and has held positions at MIT, Ohio University, Chubu University in Japan and the University of Wisconsin-Milwaukee.
        </p>
      </div>
    </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
