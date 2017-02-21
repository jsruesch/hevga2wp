<?php
/*
 Template Name: Fellow Bio Henry Jenkins
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/portraits/portrait_henry.png" class="center-block"/>
          </div>
          <div class="row mar15-top">
            <h3 class="text-white text-center">Henry Jenkins</h3>
            <p class="text-center"><strong>University of Southern California</strong></p>
          </div>
        </div>
        <a href="mailto:hjenkins@usc.edu" target="_blank">
          <div class="row bg-dgreen pad10-top pad10-bot">
            <p class="text-white text-center">
              <i class="fa fa-envelope" aria-hidden="true"></i> Email Henry
            </p>
          </div>
        </a>
      </div>
      <!-- Bio -->
      <div class="col-md-9 bg-lgrey pad15 mar20-bot">
        <p>
          Henry Jenkins is the Provost's Professor of Communication, Journalism, Cinematic Arts and Education at the University of Southern California and the founder and former director of the Comparative Media Studies graduate Program at MIT. He is the author and editor of more than 17 books, including From Barbie to Mortal Kombat: Gender and Computer Games, Textual Poachers: Television Fans and Participatory Culture, Fans, Bloggers, and Gamers, Convergence Culture: Where Old and New Media Collide, Spreadable Media: Creating Meaning and Value in a Networked Culture, and By Any Media Necessary: The New Youth Activism. He was a founder of the Education Arcade and the GAMBIT Singapore-MIT Games Lab. He blogs twice a week at henryjenkins.org.
        </p>
      </div>
    </div>
<!-- END: Main Content -->

<?php get_footer(); ?>
