$(document).foundation({
  orbit: {
    //navigation_arrows: false,
    bullets: false,
	next_on_click: false,
	slide_number: false,
	timer: false 
  }
});

/* Sticky Header */
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
	console.log(stickyHeight);
	if ($(this).scrollTop() > stickyHeight){  
		$('.header').addClass("sticky");
		$('.main-container').css("margin-top", stickyHeight);
	  }
	else{
		$('.header').removeClass("sticky");
		$('.main-container').css("margin-top", 0);
	  }

});