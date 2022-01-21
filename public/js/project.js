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

/* Section: Service */
const service_carSelling = document.getElementById('service_carSelling');
service_carSelling.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-key service_js"></i>' + 'Car Selling',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

const service_carRental = document.getElementById('service_carRental');
service_carRental.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-car service_js"></i>' + 'Car Rental',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

const service_partRepair = document.getElementById('service_partRepair');
service_partRepair.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-tools service_js"></i>' + 'Parts Repair',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

const service_carInsurance = document.getElementById('service_carInsurance');
service_carInsurance.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-car-crash service_js"></i>' + 'Car Insurance',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

const service_battery = document.getElementById('service_battery');
service_battery.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-car-battery service_js"></i>' + 'Battery Replacement',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

const service_oilChange = document.getElementById('service_oilChange');
service_oilChange.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-gas-pump service_js"></i>' + 'Oil Change',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

const service_accessory = document.getElementById('service_accessory');
service_accessory.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-cogs service_js"></i>' + 'Car Accessories',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

const service_member = document.getElementById('service_member');
service_member.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-user-lock service_js"></i>' + 'Membership Service',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

const service_support = document.getElementById('service_support');
service_support.addEventListener('click', function() {
  Swal.fire({
    title: '<i class="fas fa-headset service_js"></i>' + '24/7 Support',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!' +
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!'+
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ab repudiandae. Neque distinctio quae soluta explicabo nobis alias, earum maiores at cum. Nihil minus modi architecto maxime doloribus rerum nostrum!',
  })
})

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

/* Add to cart */
const cart_btn = document.getElementById('cart-btn');

cart_btn.addEventListener('click', function() {

})