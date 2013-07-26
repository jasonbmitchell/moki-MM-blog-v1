<?php
/**
 * The Header for our theme.
 * 
 * WARNING: This template file is a core part of the 
 * Theme Blvd WordPress Framework. This framework is 
 * designed around this file NEVER being altered. It 
 * is advised that any edits to the way this file 
 * displays its content be done with via hooks and filters.
 * 
 * @author		Jason Bobich
 * @copyright	Copyright (c) Jason Bobich
 * @link		http://jasonbobich.com
 * @link		http://themeblvd.com
 * @package 	Theme Blvd WordPress Framework
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php 
	themeblvd_head(); 
	$childThemeURL = get_stylesheet_directory_uri();
?>

<!-- Typekit Integration -->
	<script type="text/javascript" src="http://use.typekit.net/hqj2vgo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" ></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo $childThemeURL; ?>/js/jquery.maskedinput.min.js" ></script>
	
	<script type="text/javascript" src="<?php echo $childThemeURL; ?>/js/marketo.js"></script>
	<script type="text/javascript" src="<?php echo $childThemeURL; ?>/js/app-MM-BLOG.js"></script>
	
	<link rel="shortcut icon" href="<?php echo $childThemeURL; ?>/images/favicon.png">
	
	<!-- Less CSS Integration -->
	<link rel="stylesheet/less" type="text/css" href="<?php echo $childThemeURL; ?>/style-everythird.css" />
	<script type="text/javascript" src="<?php echo $childThemeURL; ?>/js/less-1.3.3.min.js" ></script>
	
	<!-- Greensock Integration -->
	<script  type="text/javascript" src="<?php echo $childThemeURL; ?>/js/greensock/TweenMax.min.js"></script>
	<script  type="text/javascript" src="<?php echo $childThemeURL; ?>/js/greensock/TimelineMax.min.js"></script>
	
	<script type="text/javascript" src="<?php echo $childThemeURL; ?>/js/jquery.cookie.js"></script>

	<!-- Marketo Code -->

	<script type="text/javascript">
	(function() {
	  var didInit = false;
	  function initMunchkin() {
	    if(didInit === false) {
	      didInit = true;
	      Munchkin.init('921-OYU-441');
	    }
	  }
	  var s = document.createElement('script');
	  s.type = 'text/javascript';
	  s.async = true;
	  s.src = document.location.protocol + '//munchkin.marketo.net/munchkin.js';
	  s.onreadystatechange = function() {
	    if (this.readyState == 'complete' || this.readyState == 'loaded') {
	      initMunchkin();
	    }
	  };
	  s.onload = initMunchkin;
	  document.getElementsByTagName('head')[0].appendChild(s);
	})();
	</script>

</head>
<body <?php body_class(); ?>>
<?php themeblvd_before(); ?>
<div id="wrapper">

	<div id="alert-navigation">
		<ul>
			<li id='btn-header-open'></li>
			<li id='btn-header-close'></li>
		</ul>
	</div>

	<div id="container">

		<div id="alert">
			<ul>
				<li>Get the complete guide to building tablet kiosks</li>
				<li><img src="<?php echo $childThemeURL; ?>/images/MOKIMobility_NEWeb_prom-eBook.png" title="" class="inline"/></li>
				<li><a href="http:mokimobility.com/ebook-two/" class="callToAction" target="_blank">download now</a></li>
			</ul>
		</div>
		
		<?php themeblvd_header_before(); ?>
		
		<!-- HEADER (start) -->
		
		<div id="top">
			<header id="branding" role="banner">
				<div class="content">
					

					<?php
					/**
					 * Display header elements.
					 */
					themeblvd_header_top();
					themeblvd_header_above();
					themeblvd_header_content();
					
					?>
					
				</div><!-- .content (end) -->
			</header><!-- #branding (end) -->
		</div><!-- #top (end) -->
		
		<!-- HEADER (end) -->
		
		<?php themeblvd_header_after(); ?>