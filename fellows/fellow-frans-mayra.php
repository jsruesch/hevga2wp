<?php
/*
 Template Name: Fellow Bio Frans Mäyrä
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
            <h3 class="text-white text-center">Frans Mäyrä</h3>
            <p class="text-center"><strong>University of Tampere</strong></p>
          </div>
        </div>
        <a href="mailto:frans.mayra@uta.fi" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Frans
            </p>
          </div>
        </a>
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Frans Mäyrä is the Professor of Information Studies and Interactive Media, with specialization in digital culture and game studies in the University of Tampere, Finland. He is the founder and head of University of Tampere Game Research Lab. Frans Mäyrä has studied the relationship of culture and technology from the early nineties and he has specialised in the cultural analysis of technology, particularly on the ambiguous, conflicting and heterogeneous elements in this relationship. He has also served as the founding President of Digital Games Research Association, DiGRA, and published widely on topics that range from games and play to information technologies, science fiction and fantasy. He is recipient of multiple grants and has acted as leader in 45 externally funded games research project and an author of over 160 scientific publications (as of February 2017).
        </p>
      </div>
    </div>
  </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
