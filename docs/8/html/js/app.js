(function($, document, window){
	
	$(document).ready(function(){

		

		// Mobile menu toggle 
		$(".menu-toggle").click(function(){
			$(".menu-content").addClass("active");
		});
		$(".menu-toggle-back").click(function(){
			$(".menu-content").removeClass("active");
		});

		$("[data-bg-image]").each(function(){
			var image = $(this).data("bg-image");
			$(this).css({"background-image":"url('"+image+"')"});
		});


	  	$(".product-carousel").owlCarousel({
	  		loop: true,
	  		autoplay: true,
	  		autoplayTimeout: 2000,
	  		autoplayHoverPause: true,
	  		dots: false,
	  		nav: true,
	  		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
	  	});

	  	if( $(".map").length ) {
			$('.map').gmap3({
				map: {
					options: {
						maxZoom: 14 
					}  
				},
				marker:{
					address: "40 Sibley St, Detroit",
				}
			},
			"autofit" );
	    	
	    }
	  	
	});

	function productResize(){
		var pw = $(".product .product-image").width();
		$(".product-detail").height(pw);
	}

	$(window).resize(function(){
		productResize();
	});

	$(window).load(function(){
		$(".hero-slider,.testimonial-slider").flexslider({
			directionNav: false,
			controlNav: true,
		});

		$(".products-slider").flexslider({
			directionNav: true,
			controlNav:false,
			prevText: '<i class="fa fa-angle-left"></i>',
			nextText: '<i class="fa fa-angle-right"></i>',
			start: function(slider){
				$(".flex-direction-nav").attr("data-slide",slider.currentSlide+1+"/"+slider.count);
			},
			after: function(slider){
				$(".flex-direction-nav").attr("data-slide",slider.currentSlide+1+"/"+slider.count);	
			}
		});

		productResize();
	});

})(jQuery, document, window);