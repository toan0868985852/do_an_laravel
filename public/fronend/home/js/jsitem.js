var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 0,
        slideShadows: true,
    },
    pagination: {
        el: '.swiper-pagination',
    },
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});


$(".skill-per").each(function () {
    var $this = $(this);
    var per = $this.attr('per');
    $this.css("width",per+'%');
    $({animatedValue: 0}).animate({animatedValue: per},{
        duration: 1000,
        step: function () {
            $this.attr('per',Math.floor(this.animatedValue) + '%');
        },
        complete: function () {
            $this.attr('per',Math.floor(this.animatedValue) + '%');
        },
    });
});
