/* Header Image Slider */
const slider_img = document.getElementById('slider_img');
let header_images = new Array(
  "../projectImage/mainImg1.jpg",
  "../projectImage/mainImg2.jpg",
  "../projectImage/mainImg3.jpg",
);
var header_img_len = header_images.length;
let i = 0;
function slider() {
    if (i > header_img_len - 1) {
        i = 0;
    }
    slider_img.src = header_images[i];
    i++;
    setTimeout('slider()', 5000);
}

/* Section Scroll to */

$(document).ready(function() {
    $('#view_more').click(function(){
        $('html,body').animate({scrollTop:$('#vehicles').offset().top},500);
    })
    $('.scroll-Header').click(function(){
        $('html,body').animate({scrollTop:$('#header').offset().top},500);
    })
    $('.scroll-popular-vehicle').click(function(){
      $('html,body').animate({scrollTop:$('#vehicles').offset().top},500);
    })
    $('.scroll-feature').click(function(){
      $('html,body').animate({scrollTop:$('#featured').offset().top},500);
    })
    $('.scroll-Services').click(function(){
        $('html,body').animate({scrollTop:$('#services').offset().top},500);
    })
    $('.scroll-reviews').click(function(){
      $('html,body').animate({scrollTop:$('#reviews').offset().top},500);
    })
    $('.scroll-Contact').click(function(){
        $('html,body').animate({scrollTop:$('#contact').offset().top},500);
    })
})

/* Section: Popular Vehicles */
var swiper = new Swiper(".vehicles-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

/* Section: Featured */

var swiper = new Swiper(".featured-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 30,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

/* Section: Review */

var swiper = new Swiper(".review-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
