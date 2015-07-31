$(document).ready(function(){
	
	
	//------------------------------------- Navigation setup ------------------------------------------------//


	//--------- Scroll navigation ---------------//
	$("#mainNav li a, .logo a").click(function(event){

		event.preventDefault();
		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;

		$('html,body').animate({scrollTop:target_top -15}, 800);


	});

	//-------------Highlight the current section in the navigation bar------------//
	var sections = $("section");
		var navigation_links = $("#mainNav a");

		sections.waypoint({
			handler: function(event, direction) {

				var active_section;
				active_section = $(this);
				if (direction === "up") active_section = active_section.prev();

				var active_link = $('#mainNav a[href="#' + active_section.attr("id") + '"]');
				navigation_links.removeClass("active");
				active_link.addClass("active");

			},
			offset: '35%'
		});
		
		


//--------------------------------- Hover animation for clients --------------------------------//
		
		$('.profileImg ul').css({opacity:0});
		$('.profileImg').hover( function(){ 
			$(this).find("img").animate({ opacity: 0.75 }, 'fast');
			$(this).children('ul').animate({ opacity: 1 }, 'fast');
		}, function(){ 
			$(this).find("img").animate({ opacity: 1 }, 'slow'); 
			$(this).children('ul').animate({ opacity: 0 }, 'slow');
		});



//--------------------------------- End hover animation for clients--------------------------------//


//--------------------------------- Mobile menu --------------------------------//

var fade=false;
$('.mobileBtn').click(function() {
		if(fade==false){
        	$('#mainNav ul').fadeIn("slow");
			fade=true;
			return false;
			
		}else{
		
			$('#mainNav ul').fadeOut("faste");
			fade=false;
			return false;	
		}
});

//--------------------------------- End mobile menu --------------------------------//



//--------------------------------- Count down --------------------------------//

var myDate = new Date();
myDate = new Date(myDate.getFullYear(),12-1, 30);
$('#counter').countdown({until: myDate});

//--------------------------------- End Count down --------------------------------//

});