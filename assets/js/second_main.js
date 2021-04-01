$(document).ready(function(){
    /*-----------------Navbar Shrink ---------------*/ 
    $(window).on("scroll", function(){
        if($(this).scrollTop() > 90){
            $(".navbar").addClass("navbar-shrink");
        }
        else{
            $(".navbar").removeClass("navbar-shrink");
        }
    });
    /*-----------------video popup-----------------*/
    const videoSrc = $("#player-1").attr("src");
    $(".video-play-btn, .video-popup").on("click", function(){
        if($(".video-popup").hasClass("open")){
            $(".video-popup").removeClass("open");
            $("#palyer-1").attr("src","");
        }
        else{
            $(".video-popup").addClass("open");
            if($("#player-1").attr("src")==''){
                $("#player-1").attr("src", videoSrc);
            }
        }
    });
    /*------------------ Feature Carousel---------------- */ 
    $('.features-carousel').owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
});
 /*------------------ Testimoni Carousel---------------- */ 
    $('.testimonials-carousel').owlCarousel({
    loop:true,
    margin:0,
    //autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:2,
        }
    }
});

/*------------------ Team Carousel ---------------- */ 
    $('.team-carousel').owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
});
/*------------------ Page Scrool ---------------- */ 
$.scrollIt({
    topOffset: -50
});
/*----------------- slide testimoni -------------- */ 
var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });

//   caraousel
$("#banner-slider .owl-carousel").owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
});
$("#news-slider .owl-carousel").owlCarousel({
    items:3,
    loop:true,
    autoplay:true,
});
$("#team-slider .owl-carousel").owlCarousel({
    items:4,
    loop:true,
    autoplay:true,
});
});