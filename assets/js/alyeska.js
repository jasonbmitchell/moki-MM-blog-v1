/**
 * This file replaces the framework's default JS file.
 */	
 
jQuery(document).ready(function($) {
	
	// ---------------------------------------------------------
	// Superfish Menus
	// ---------------------------------------------------------
	
	$('#main-menu .menu').superfish({
		autoArrows: false
	}); 
	
	// ---------------------------------------------------------
	// No-click dropdowns
	// ---------------------------------------------------------
	
	$('ul.menu .no-click').find('a:first').click(function(){
		return false;
	});
	
	// ---------------------------------------------------------
	// Gallery Shortcode Integration
	// ---------------------------------------------------------

	$('.gallery').append('<div class="clear"></div>');

	$('.gallery').each(function(){

		var current_gallery = $(this),
			gallery_id = current_gallery.attr('id');
		
		current_gallery.find('.gallery-item a').each(function(){
			if(this.href.match(/\.(jpe?g|png|bmp|gif|tiff?)$/i)){
			    $(this).attr('rel','themeblvd_lightbox['+gallery_id+']');
			    $(this).addClass('image-button');
			}
		});
	
	});
	
	// ---------------------------------------------------------
	// Lightbox
	// ---------------------------------------------------------
	
	$('a[rel^="themeblvd_lightbox"], a[rel^="featured_themeblvd_lightbox"]').prettyPhoto({
		social_tools: false, // Share icons are not compatible with IE9
		deeplinking: false,
		overlay_gallery: false,
		show_title: false
	});
	
	$('a[rel^="themeblvd_lightbox"]').prepend('<span class="enlarge"></span>');
	
	$('a[rel^="themeblvd_lightbox"]').hover(
		function () {
			var el = $(this);
			el.find('.enlarge').stop(true, true).animate({
				opacity: 1
			}, 100 );
			el.find('img').stop(true, true).animate({
				opacity: 0.6
			}, 100 );
		}, 
		function () {
			var el = $(this);
			el.find('.enlarge').stop(true, true).animate({
				opacity: 0
			}, 100 );
			el.find('img').stop(true, true).animate({
				opacity: 1
			}, 100 );
		}
	);

	// ---------------------------------------------------------
	// Featured Image overlay links
	// ---------------------------------------------------------
	
	$('.featured-image a').hover(
		function () {
			var el = $(this);
			el.find('.image-overlay-bg').stop(true, true).animate({
				opacity: 0.6
			}, 300 );
			el.find('.image-overlay-icon').stop(true, true).animate({
				opacity: 1
			}, 300 );
		}, 
		function () {
			var el = $(this);
			el.find('.image-overlay-bg').stop(true, true).animate({
				opacity: 0
			}, 300 );
			el.find('.image-overlay-icon').stop(true, true).animate({
				opacity: 0
			}, 300 );
		}
	);
	
	// ---------------------------------------------------------
	// Tabs
	// ---------------------------------------------------------
	
	$('.tb-tabs').each(function(){
		var el = $(this);
		el.find('.tab-content').hide();
		el.find('.tab-content:first').show();
	});
    $('.tb-tabs .tab-nav a').click(function() {
		var el = $(this), parent = el.closest('.tb-tabs'), activetab = el.attr('href');
		parent.find('.tab-nav li').removeClass('active');
		el.closest('li').addClass('active');
		parent.find('.tab-content').hide();
		parent.find(activetab).show(); // Use show instead of nicer looking fade to avoid jumping
        return false;
    });
    
    // ---------------------------------------------------------
	// Toggle
	// ---------------------------------------------------------
	
	$('.tb-toggle').each(function(){
		$(this).find('.toggle-content').hide();
	});
	$('.tb-toggle a.toggle-trigger').click(function(){
		var el = $(this), parent = el.closest('.tb-toggle');
		if( el.hasClass('active') )
		{
			parent.find('.toggle-content').hide();
			el.removeClass('active');
		}
		else
		{
			parent.find('.toggle-content').show();
			el.addClass('active');
		}
		return false;
	});
	
	// ---------------------------------------------------------
	// Jump Menu
	// ---------------------------------------------------------
	
	$(".tb-jump-menu").change(function(e) {
		window.location.href = $(this).val();
	})
	
	// ---------------------------------------------------------
	// Main Menu Search
	// ---------------------------------------------------------
	
	$("#search-trigger").click(function(){ return false; });
	
	$('#search-popup-wrapper').each(function () {
	
	    var distance = 10;
	    var time = 250;
	    var hideDelay = 500;
	
	    var hideDelayTimer = null;
	
	    var beingShown = false;
	    var shown = false;
	    var trigger = $('#search-trigger', this);
	    var info = $('.search-popup-outer', this).css('opacity', 0);
	
	
	    $([trigger.get(0), info.get(0)]).mouseover(function () {
	        if (hideDelayTimer) clearTimeout(hideDelayTimer);
	        if (beingShown || shown) {
	            // don't trigger the animation again
	            return;
	        } else {
	            // reset position of info box
	            beingShown = true;
				
	            info.css({
	                bottom: 5,
	                right: -12,
	                display: 'block'
	            }).animate({
	                bottom: '+=' + distance + 'px',
	                opacity: 1,
	                filter: '' //IE Transparency Hack
	            }, time, 'swing', function() {
	                beingShown = false;
	                shown = true;
	            });
	        }
	
	        return false;
	        
	    }).mouseout(function () {
	    
	        if (hideDelayTimer) clearTimeout(hideDelayTimer);
	        hideDelayTimer = setTimeout(function () {
	            hideDelayTimer = null;
	            info.animate({
	                bottom: '+=' + distance + 'px',
	                opacity: 0,
	                filter: '' //IE Transparency Hack
	            }, time, 'swing', function () {
	                shown = false;
	                info.css('display', 'none');
	            });
	
	        }, hideDelay);
	
	        return false;
	    });
	});
	
	// ---------------------------------------------------------
	// Header Shades
	// ---------------------------------------------------------
	
	$('h1, h2, h3').each(function(){
	    var el = $(this);
	    el.has('a').addClass('has-shade').find('a').prepend('<span class="header-shade"></span>');
	   	el.not('.has-shade').prepend('<span class="header-shade"></span>');
	});
	
});