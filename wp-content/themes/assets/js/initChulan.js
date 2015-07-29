(function($) {
    function initChulan() {
        "use strict";
        $('#main').jpreLoader({
            loaderVPos: '50%',
            autoClose: true
        }, function() {
            $('#main').animate({
                "opacity": '1'
            }, {
                queue: false,
                duration: 700,
                easing: "easeInOutQuad"
            });
            if ($('h1.animtext').length > 0)
                $('h1.animtext').textillate({ in : {
                        effect: 'flipInX',
                        delayScale: 2.5
                    }
                });
            if ($('.fade').length > 0) {
                setTimeout(function() {
                    $('.fade').animate({
                        "opacity": '1'
                    }, {
                        queue: false,
                        duration: 1200,
                        easing: "easeInOutQuad"
                    });
                }, 100);
            }
        });
        if ($('h1.animtext').length > 0) {
            $('h1.animtext').fitText(1.8, {
                minFontSize: '20px',
                maxFontSize: '72px'
            });
        }
        $('.nav-button').on('click', function() {
            $('.link-holder').slideToggle(500);
        });
        
        // MagnificPopup  ----------------------------------------	

	$('.popup-with-move-anim').magnificPopup({
		type: 'ajax',
		alignTop: true,
		overflowY: 'scroll' ,
		fixedContentPos: false,
		fixedBgPos: true,
		closeBtnInside: false,	
		midClick: true,
		removalDelay: 600,
		mainClass: 'my-mfp-slide-bottom',         
		callbacks: {
			ajaxContentAdded: function() {
				$("#project-slider").owlCarousel({
					navigation : true,
					pagination:true, 
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true,
					transitionStyle : "backSlide"				
				 });
				 $('.white-popup-block h2').textillate({in:{effect:'flipInX',delayScale: 3.5}});
			}
		}
	});
	
	$('.popup-youtube, .popup-vimeo').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		removalDelay: 600,
		mainClass: 'my-mfp-slide-bottom', 
	});
	
	$('.popup-gallery').magnificPopup({
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		removalDelay: 600,
		mainClass: 'my-mfp-slide-bottom', 
		gallery: {
			enabled: true,
			navigateByImgClick: true, 
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		}
	});	
	
	$('.image-popup').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		removalDelay: 600,
		mainClass: 'my-mfp-slide-bottom',
		image: {
			verticalFit: true
		}
	});

    };
    $(document).ready(function() {
        initChulan();
    });
})(jQuery);