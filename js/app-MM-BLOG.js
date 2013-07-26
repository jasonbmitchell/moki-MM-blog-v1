$("document").ready(function() {



	// header animation and interactivity

	var alertHeight = $("#alert").height();
	var targetOpen = 0;
	var targetClosed = alertHeight * -1;
	var cookieAlert = $.cookie("MM_alert");

	TweenMax.to($("#btn-header-open"), 0, {autoAlpha: 0, y: -32, ease:Bounce.easeOut});
	TweenMax.to($("#btn-header-close"), 0, {autoAlpha: 1, y: 0, ease:Bounce.easeOut});

	if (cookieAlert == undefined)  {
		TweenMax.to($("#container"), 0, {y: targetClosed, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-close"), 0, {autoAlpha: 0, y: -32, ease:Bounce.easeOut});
		TweenMax.to($("#container"), 0.25, {delay: 2, y: targetOpen, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-close"), 0.25, {delay: 2, autoAlpha: 1, y: 0, ease:Bounce.easeOut});
	} else {
		if (cookieAlert == "hide")  {
			TweenMax.to($("#container"), 0, {y: targetClosed, ease:Bounce.easeOut});
			TweenMax.to($("#btn-header-open"), 0.25, {autoAlpha: 1, y: 0, ease:Bounce.easeOut});
			TweenMax.to($("#btn-header-close"), 0, {autoAlpha: 0, y: -32, ease:Bounce.easeOut});
		} else {
			TweenMax.to($("#container"), 0, {y: targetOpen, ease:Bounce.easeOut});
			TweenMax.to($("#btn-header-open"), 0, {autoAlpha: 0, y: -32, ease:Bounce.easeOut});
			TweenMax.to($("#btn-header-close"), 0.25, {autoAlpha: 1, y: 0, ease:Bounce.easeOut});
		}
	}

	$('#btn-header-open').click(function() {
		TweenMax.to($("#container"), 0.25, {y: targetOpen, ease:Bounce.easeOut});
		//$.cookie("MM_alert", "show", { expires : 7 });

		$.cookie("MM_alert", "show", { expires: 7, path: '/'});

		TweenMax.to($("#btn-header-open"), 0.25, {autoAlpha: 0,y: -32, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-close"), 0.25, {autoAlpha: 1,y: 0, ease:Bounce.easeOut});
	});

	$('#btn-header-close').click(function() {
		TweenMax.to($("#container"), 0.5, {y: targetClosed, ease:Bounce.easeOut});
		//$.cookie("MM_alert", "hide", { expires : 7 });

		$.cookie("MM_alert", "hide", { expires: 7, path: '/'});

		TweenMax.to($("#btn-header-open"), 0.25, {autoAlpha: 1, y: 0, ease:Bounce.easeOut});
		TweenMax.to($("#btn-header-close"), 0.25, {autoAlpha: 0, y: -32, ease:Bounce.easeOut});
	});



});