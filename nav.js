$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 100) {
		$('nav').removeClass('shrink');
		$('change').removeClass('shrink_change');
    }
    else {
    $('nav').addClass('shrink');
    }
  });
});

$(document).ready(function(){
	
	$('body').scrollspy({ 
		target: '#scroll-spy',
		offset: 70
	});

	var height = $('#tv').innerHeight();
	var windowHeight = $(window).height();
	var navHeight = $('nav.navbar').innerHeight();
	var siblingHeight = $('#tv').nextAll().innerHeight();
	var newHeight = $(window).height();

	if(height < windowHeight){
		$('body').css("padding-bottom", windowHeight-navHeight-height-siblingHeight + "px");
	}

	$(window).resize(function(event){
		var height = $('#tv').innerHeight();
		var windowHeight = $(window).height();
		var navHeight = $('nav.navbar').innerHeight();
		var siblingHeight = $('#tv').nextAll().innerHeight();
		
		
		if(height < windowHeight){
			$('body').css("padding-bottom", windowHeight-navHeight-height-siblingHeight + "px");
		}
	});
	
	$('nav.navbar a, .scrollTop').click(function(event){
		if (this.hash !== "") {
			event.preventDefault();

			var hash = this.hash;
			
			$('section').removeClass("focus");

			$(hash).addClass("focus");

			setTimeout(function(){
				$(hash).removeClass("focus");
			}, 2000);			
			
			$('html, body').animate({
				scrollTop: $(hash).offset().top - 69
			}, 600, function(){
				
				window.location.hash = hash;				
			});
					
			$(".navbar-collapse").collapse('hide');			
		}

	});
	$(window).scroll(function(){
		var scrollPos = $('body').scrollTop();
		if(scrollPos > 0){
			$('.navbar').addClass('show-color');
			$('.scrollTop').addClass('show-button');
		} else{
			$('.navbar').removeClass('show-color');
			$('.scrollTop').removeClass('show-button');
		}
		
	});
});

