$(function(){
	var w = $(window).width();

	//create sticky header
	 var navigation = $('nav').offset().top,
	 	 navheight = $('nav').height();
          
    $(window).scroll(function(){

            if($(window).scrollTop() > (navigation)) {		
                    $('nav').addClass('sticky');
                    $('section#festival').css('margin-top', navheight);
            } else {
                    $('nav').removeClass('sticky');
                    $('section#festival').css('margin-top', 0);
            }
    });

    //scrolling
    $('nav ul li a, #mobile-menu li a').click(function(event) {
		

		var section = $(this).data('url');

		if (section == "home")
		{
			event.preventDefault();
		   $('html, body').animate({
				scrollTop: $("header").offset().top + 100
			}, 500);
		}
		else if (section == "fb")
		{
			window.open('https://www.facebook.com/clubtropicana06', '_blank');
		}
		else 
		{
		   event.preventDefault();
			$('html, body').animate({
				scrollTop: $("#"+section).offset().top - 50
			}, 500);
		}
	});	

	$('#cta-reg').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
				scrollTop: $("#register").offset().top - 50
		}, 500);
	});

	// animate header
	if(w >= 380) {
		$('header img').css('width','400');
		$('header img').css('opacity','0.6');
		$('header img').animate({ width: '550px', opacity: '1' }, 1000);
		$('html body').animate({ scrollTop: 110}, 1000);
	} else {
		$('html, body').css('top','0');
	}

	//overlayer 
	$('#video img').click(function(event){
		event.preventDefault();
		var topscreen = $('html').offset().top;
		$('.overlayer').css('top',-topscreen);
		$('.overlayer').fadeIn();
		$('body, html').css('overflow-y','hidden');

		$("#yt")[0].src += "?autoplay=1";
		//$(this).unbind("click");
	});

	$('.close, .overlayer').click(function(event){
		event.preventDefault();
		closeyt();
	});

	$(document).keyup(function(e) {
 	 if (e.keyCode == 27) { 
 	 	closeyt();
 	  } 
	});

	function closeyt() {
		$('.overlayer').fadeOut();
		$('body, html').css('overflow-y','auto');

		//First get the  iframe URL
		var url = $('#yt').attr('src');
		
		//Then assign the src to null, this then stops the video been playing
		$('#yt').attr('src', '');
		
		// Finally you reasign the URL back to your iframe, so when you hide and load it again you still have the link
		$('#yt').attr('src', url);
		$("#yt")[0].src = "http://www.youtube.com/embed/qiwi_48GIxk";
	}


	//open artist
	$('#lineup ul li a').click(function(event) {
		event.preventDefault();

		//close articles
		$("section#artists article").hide();

		artist = $(this).data('artist');
		//show
		if(artist != "none") {
			$(".artist-"+artist).addClass('animated flipInX');
			$(".artist-"+artist).show();
	
			//slide to
			$('html, body').animate({
				scrollTop: $("article.artist-"+artist).offset().top - 400
			}, 500);
		}
	});


	$("section#artists .close").click(function(event) {
		event.preventDefault();

		//close articles
		$("section#artists article").hide();

		//delete animate class

		//scroll to line-up
		$('html, body').animate({
				scrollTop: $("#lineup").offset().top - 50
		}, 500);
	});

	$('#reg-team').click(function(event) {
		event.preventDefault();

		/*$("#team").addClass('animated flipInX');
		$("#team").show();
	
		//slide to
		$('html, body').animate({
			scrollTop: $("#team").offset().top - 400
		}, 500);*/
	});

	$("section#team .close").click(function(event) {
		event.preventDefault();

		//close articles
		$("section#team").hide();

		//scroll to line-up
		$('html, body').animate({
				scrollTop: $("section#register").offset().top - 50
		}, 500);
	});


	// mobile menu shizzle
	$('#mobile-menu-ico #ico').click(function(event) {
		event.preventDefault();

		$('#mobile-menu').slideToggle();

	});

	$('#mobile-menu li a').click(function(event) {
		//event.preventDefault();

		$('#mobile-menu').slideToggle();

	});

	if (window.location.hash == "#register") {
		$("#team").show();

		$('html, body').animate({
				scrollTop: $("section#register").offset().top - 50
		}, 500);

		$("#reg-team").replaceWith("<p>Thank you for your registration. You will receive an email as soon as possible.</p>");
		
		$("section#team").hide();
	}
});











