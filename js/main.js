
jQuery(document).ready(function(r) {

    r(".testimonials").slick({
        slidesToShow: 1,
        arrows: true,
        prevArrow: '<div class="arrows arrow-left"></div>',
        nextArrow: '<div class="arrows arrow-right"></div>',
    })

    r('.faq-left ul li').click(function(){
        var f = r(this).attr('data-id');
        r('.faq-right p' ).removeClass('active');
        r('.'+f).addClass('active');
        r('.faq-left ul li' ).removeClass('active');
        r(this).addClass('active');
    })


});