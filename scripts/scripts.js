$(document).ready(function() {
	var isLateralNavAnimating = false;

	function slideNav(event) {
		event.preventDefault;
		if(!isLateralNavAnimating) {
			if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true;

			$('body').toggleClass('nav-is-open');
			$('.hidden-nav-wrapper').one('webkitTransitionEnd otransitionend otransitionend msTransitionend transitionend', function() {
				isLateralNavAnimating = false;
			});
		}
	}

	$('.nav-icon').on('click', function() {
		slideNav(event);	
	});
	$('.close-nav').on('click', function() {
		slideNav(event);	
	});

});