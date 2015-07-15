$(document).foundation({
  orbit: {
    //navigation_arrows: false,
    bullets: false,
	next_on_click: false,
	slide_number: false,
	timer: false 
  }
});

// Sticky Header
$(window).scroll(function() {
	var topBarHeight = $(".top-bar-section").outerHeight();
	var subNavHeight = $(".sub-nav").outerHeight();
	var browserWidth = $(window).width();
	
	if (browserWidth > 640) {
		var stickyHeight =  topBarHeight + subNavHeight + 10;
	}
	else {
		var stickyHeight = 0;
	}
	//console.log(stickyHeight);
	if ($(this).scrollTop() > stickyHeight){  
		$('.header').addClass("sticky");
		$('.main-container').css("margin-top", stickyHeight);
	  }
	else{
		$('.header').removeClass("sticky");
		$('.main-container').css("margin-top", 0);
	  }

});

// Contact Page - Map height to fill rest of available space

$(document).ready(function() {
	var adressHeight = $(".adress").outerHeight();
	var parentHeight = $(".contact>.row>.columns").outerHeight();
	var mapHeight = parentHeight - adressHeight - 8;
	$("#map").css( "height", mapHeight );
});

// Product page thumbnails enlargement

$(document).ready(function() {
	$('.clearing-thumbs_links li').bind('click', function(){
		var thumbIndex = ( $('.clearing-thumbs_links li').index(this) );
		$('.clearing-thumbs_enlarged li.active').removeClass('active');
		$('.clearing-thumbs_enlarged li:eq('+thumbIndex+')').addClass('active');
	});
});