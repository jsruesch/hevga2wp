<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- Institution Accordion Setup -->
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!-- Linkable TR -->
<script type="text/javascript">
  function DoNav(url)
  {
     document.location.href = url;
  }
</script>
<script>
      $(function() {
        $( "#accordion_usa" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_canada" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_uk" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_australia" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_ireland" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_france" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_turkey" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_singapore" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_china" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_japan" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_guatemala" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_mexico" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_venezuela" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_brazil" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_scotland" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_sweden" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_finland" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_slovakia" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_voting_members" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
  $( "#accordion_non_voting_members" ).accordion({
          heightStyle: "content",
          collapsible: true,
          active: false
        });
      });
</script>
<!-- END: Institution Accordion Setup -->

</head>
<body <?php body_class(); ?>>

  <!--
    BEGIN: Navigation
  -->
    <div class="row">
    <nav class="navbar">
      <nav class="navbar-inverse">
        <div class="container-fluid bg-black">
          <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/hevga2wp/"><img src="/hevga2wp/wp-content/themes/hevga/img/nav-logo.png"/></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/hevga2wp/about" class="text-white">About</a></li>
              <li><a href="/hevga2wp/members" class="text-white">Members</a></li>
              <li><a href="/hevga2wp/reports" class="text-white">Reports</a></li>
              <li><a href="/hevga2wp/news" class="text-white">News</a></li>
              <li><a href="#" class="text-white">DC Meeting</a></li>
              <li><a href="/hevga2wp/contact" class="text-white">Contact</a></li>
              <!-- START: Teams -->
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Join Us <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="/hevga2wp/login"><span class="text-white"><h5>Login</h5></span></a></li>
                      <li><a href="/hevga2wp/register"><span class="text-white"><h5>Register</h5></span></a></li>
                      <li><a href="/hevga2wp/membership" class="bg-yellow"><span class="text-white"><h5>Apply</h5></span></a></li>
                      <li><a href="/hevga2wp/register" class="bg-lblue"><span class="text-white"><h5>Twitter</h5></span></a></li>
                      <li><a href="/hevga2wp/register" class="bg-fbpurple"><span class="text-white"><h5>Facebook</h5></span></a></li>
                      <!--<li role="separator" class="divider"></li>-->
                  </ul>
              </li>
              <!-- END: Teams -->
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
  <!-- END: Navigation -->
