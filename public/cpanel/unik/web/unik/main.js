(function ($) {
	"use strict";

	/*========================= preloader js======================*/ 
	$(window).on('load',function () {
        setTimeout(function () {
            $('#preloader').fadeOut('slow', function () {});
        }, 2000); // set the time here
    });

	/*========================time js start==================*/
	$("#mytime").remoteTime({
		key: "AIzaSyDKEovEGcWvyaCUxAU_7F9efJgy_EF-o-I",
		format: "l, F jS, g:i:s a"
	});

	/*=========================sticky nav js======================*/
	$(window).on('scroll',function() {
	  if ($(document).scrollTop() > 150) {
	    $('nav').addClass('menu');
	  } else {
	    $('nav').removeClass('menu');
	  }
	});

	/*=========================auto height js======================*/
	$(".animte_nav").on('click',function(e){
		var linkHerf = $(this).attr("href");
		var headerH = '150';

		$('html, body').animate({
			scrollTop: $(linkHerf).offset().top - headerH + "px"
		},1000);

		e.preventDefault();
	})


	/*=========================hide menu js======================*/
	$("ul.nav li a").on("click", function () {
      $("#bs-example-navbar-collapse-1").collapse("hide");
    });


	/*=========================auto height js======================*/
	var homeSec = $("#banner");
    homeSec.height($(window).height());

    $(window).on("resize", function() {
        homeSec.height($(window).height());
    });

    
    /*=========================counter up js======================*/
    $('.counter').counterUp();
    

    /*=========================slick carousel js======================*/
    $('.team_slider').slick({
		  slidesToShow: 3,
		  slidesToScroll:2,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  dots: true,
		  responsive: [
			{
			  breakpoint:1024,
			  settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow:2
			  }
			},
			{
			  breakpoint: 767,
			  settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '-40px',
				slidesToShow: 2
			  }
			},
			{
			  breakpoint:480,
			  settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow:1
			  }
			}
		  ]
		});

    /*=========================slick carousel js======================*/
    $('.clients_testimonial').slick({
		  slidesToShow: 3,
		  slidesToScroll:1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  dots: true,
		  responsive: [
			{
			  breakpoint:991,
			  settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow:2
			  }
			},
			{
			  breakpoint:767,
			  settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow: 1
			  }
			}
		  ]
		});

    /*=========================slick carousel js======================*/
    $('.gallery_items').mixItUp();

    /*========================= magnify popup js======================*/ 
	$(".gallery_shape").fancybox({
	    padding: 0,

	    openEffect : 'elastic',
	    openSpeed  : 650,

	    closeEffect : 'elastic',
	    closeSpeed  : 550,

	    closeClick : true,
	});
	  $(".gallery_shape").fancybox({
	    helpers:  {
	        thumbs : {
	            width: 90,
	            height: 50
	        }
	    }
	});
	  $(".gallery_shape").fancybox({
	    fitToView: false, // avoids scaling the image to fit in the viewport
	    beforeShow: function () {
	        // set size to (fancybox) img
	        $(".fancybox-image").css({
	            "width": 600,
	            "height": 600
	        });
	        // set size for parent container
	        this.width = 600;
	        this.height = 400;
	    }
	});

    /*=========================Scroll_top js======================*/
     $(".scroll_top").on('click',function(){
        $("html,body").animate({scrollTop:0},500);
    })

    $('ul li a').on('click',function(){
		$('html, body').animate({
		    scrollTop: $( $(this).attr('href') ).offset().top
		}, 500);
		return false;
	});

	/*========================= camera slider js======================*/ 
	$('#camera_wrap_1').camera({
		loader: 'bar',
		pagination: false,
		barPosition: 'top',
		thumbnails: false
	});


	  /*========================= tooltip progressbar js======================*/ 
	//Progress Bar start
        $('.progress-bar').each(function(){
            var width = $(this).data('percentage');
            $(this).css({'transition': 'width 3s'});
            $(this).appear(function () {
                $(this).css('width', width + '%');
            });
        });
        //Progress Bar end

        
    
    

})(jQuery);