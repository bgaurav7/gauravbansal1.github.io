jQuery(document).ready(function($) {

  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  $('a.hand').click(function(){
	 $('#roasting').toggleClass('open'); 
	 $('.overlay').toggleClass('open'); 
  });

  $('a.close').click(function(){
	 $('#roasting').toggleClass('open'); 
	 $('.overlay').toggleClass('open'); 
  });

  $('#howto ul li').click(function(){
	 $(this).toggleClass('flipped'); 
  });

	$('.feed').magnificPopup({
		delegate: 'li a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});

	var scrollHandling = {
	    allow: true,
	    reallow: function() {
	        scrollHandling.allow = true;
	    },
	    delay: 50 //(milliseconds) adjust to the highest acceptable value
	};
	
	$(window).scroll(function() {
		if(scrollHandling.allow) {
			console.log($(window).scrollTop());
			
			var bottom = $(window).scrollTop();
			bottom = bottom*.2;
			$('#header .hills').css('bottom','-'+bottom+'px');
			bottom = (bottom*.2)+10;
			$('#header .cemetery').css('bottom','-'+bottom+'px');
			
			scrollHandling.allow = false;
			setTimeout(scrollHandling.reallow, scrollHandling.delay);
		}
	});  
});