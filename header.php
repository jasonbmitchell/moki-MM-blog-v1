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
<?php themeblvd_head(); ?>

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
	<div id="container">
		
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