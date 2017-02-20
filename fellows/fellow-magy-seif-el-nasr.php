<?php
/*
 Template Name: Fellow Bio Magy Seif El-Nasr
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_none.gif" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Magy Seif El-Nasr</h3>
            <p class="text-center"><strong>Northeastern University</strong></p>
          </div>
        </div>
        <a href="mailto:magy@neu.edu" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Magy
            </p>
          </div>
        </a>
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Interactive virtual environments, games and social media, are emerging as platforms used for entertainment, education, training, crowdsourcing, as well as environments to measure and understand human behavior. Dr. Seif El-Nasr’s work is focused on two goals (a) developing automated tools and techniques for authoring, adapting, and personalizing virtual environments, and (b) developing data science approaches to measure human behavior to evaluate the effectiveness of game environments in making an impact in health and learning. She recently published the first book on the subject of ‘game analytics’, called Game Analytics: Maximizing the Value of Player Data. Her work is internationally known. Notably, she received several best paper awards, including two Best Paper Awards at Foundations of Digital Games 2015. Dr. Seif El-Nasr has chaired and co-chaired several conferences, including Foundations of Digital Games (FDG) 2012 (Chair), International Conference on Entertainment Computing (ICEC) 2011 (Co-Chair), Advances in Computer Entertainment (ACE) 2009 (Program Co-Chair). She is also on several editorial boards, including IEEE Transactions on Affective Computing. She served in several NSF panels. She also severed on several SIGs, including as an ACM Representative for TC14 IFIP on Entertainment Computing.
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
