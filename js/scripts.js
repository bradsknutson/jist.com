
(function($) {

	$(document).ready(function(){
	  $(".new-carousel").owlCarousel({
	  	navText:{},
	  	responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        500:{
	            items:2,
	            nav:true
	        },
	        768:{
	            items:3,
	            nav:true
	        },
	        991:{
	            items:4,
	            nav:true
	        },
	        1200:{
	            items:5,
	            nav:true
	        }
	    }

	  });
	});


	$(document).ready(function(){
	  $(".blog-carousel").owlCarousel({
	  	navText:{},
	  	responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            autoplay:true,
				autoplayTimeout:7000,
	            nav:false
	        },
	        768:{
	        	items:1,
	        	autoplay:true,
				autoplayTimeout:7000,
	            nav:false
	        },
	        992:{
	            items:2,
	            autoplay:true,
				autoplayTimeout:7000,
	            nav:false
	        },
	        1200:{
	            items:3,
	            autoplay:true,
				autoplayTimeout:7000,
	            nav:false,
	            loop:false
	        }
	    }

	  });
	});


	$('#menu-item-47').on('click', function(e) {
      $('.search-bar').toggleClass("show"); //you can list several class names 
      e.preventDefault();
    });

})( jQuery );