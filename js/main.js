jQuery(document).ready(function(e) {

	jQuery('#myCarousel').carousel({
        interval: 5000
    })

    jQuery('#best-seller .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:4
            }
        }
	});
	
	jQuery('#brand-logos .owl-carousel').owlCarousel({
		loop:true,
		autoplay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        autoplayHoverPause: true,
        margin:10,
        nav:false,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    });
	
	jQuery("#carousel").hover(function(){
		$(".carousel-control-next-icon").toggleClass("slider-nav-active");
		$(".carousel-control-prev-icon").toggleClass("slider-nav-active");
	});

	jQuery("#seasonal-collection-2 .box-1").hover(function(){
		$(".seasonal-img-1").toggleClass("seasonal-img-active");
	});
	jQuery("#seasonal-collection-2 .box-2").hover(function(){
		$(".seasonal-img-2").toggleClass("seasonal-img-active");
	});
	jQuery("#seasonal-collection-2 .box-3").hover(function(){
		$(".seasonal-img-3").toggleClass("seasonal-img-active");
	});

	jQuery("#two-panels .box-1").hover(function(){
		$(".two-panels-img-1").toggleClass("two-panels-img-active");
	});
	jQuery("#two-panels .box-2").hover(function(){
		$(".two-panels-img-2").toggleClass("two-panels-img-active");
	});

	// $('#carousel').on('slide.bs.carousel', function () {
	// 	jQuery("#carousel .active").addClass(".carousel-item-animate");
	//   })

});



// Toggle menu on scroll
jQuery(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 115) {
		jQuery(".navbar").addClass("main-nav-toggle");
		jQuery("#carousel").addClass("carousel-margin");
	}
	else {
		jQuery(".navbar").removeClass("main-nav-toggle");
		jQuery("#carousel").removeClass("carousel-margin");
	}
});
// Toggle menu on scroll