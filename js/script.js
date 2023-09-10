jQuery('.drawer-icon').on('click', function(e){
    e.preventDefault;

    jQuery('.drawer-icon').toggleClass('is-click');
    jQuery('.drawer-content').toggleClass('is-click');
    jQuery('.drawer-background').toggleClass('is-click');
})

jQuery('a[href^="#"]').on('click', function(){
    var header = jQuery('header').innerHeight();
    var id = jQuery(this).attr('href');
    var position = jQuery(id).offset().top - header;

    jQuery('html, body').animate({
        scrollTop: position
    },
    400);
});

jQuery(window).on('scroll', function($){
    if (jQuery(this).scrollTop() > 100) {
        jQuery('.page-top').fadeIn(300);
    } else{
        jQuery('.page-top').fadeOut(300);
    };
});

jQuery('.page-top').on('click', function(){
    jQuery('html, body').animate({
        scrollTop: 0
    },
    500);

    return false;
});



jQuery('.drawer-content_item a').on('click', function(){
    jQuery('.drawer-content_item a').removeClass('is-drawer');
    jQuery(this).addClass('is-drawer');
});

const swiper = new Swiper('.swiper', {
    // Optional parameters
    //768以下
    slidesPerView: 1,
    loop: true,
    
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      type: 'bullets',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        //768px以上
        768: {
            loop: true,
            slidesPerView: 2,
            spaceBetween: 24,
        },

        //900px以上
        900: {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 24,
        }
    }
  
});


