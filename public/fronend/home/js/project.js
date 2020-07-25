$(document).ready(function () {
    $(".button").click(function () {
        var name = $(this).attr("data-filter");
        if (name == "all"){
            $(".filter").show("2000");
        }else{
            $(".filter").not("."+name).hide("2000");
            $(".filter").filter("."+name).show("2000");
        }
    });

    $('.navigation ul li a').click(function() {
        if ($(this).hasClass('active')) {
            return;
        } else {
            $('.active').removeClass('active');
            $(this).addClass('active');
        }
    });
});


// --SLIDE--
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
    loop: true,
    autoplay: {
        delay: 10000,
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
// --SLIDE--

