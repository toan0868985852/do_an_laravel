$(window).on('scroll',function () {
    if ($(window).scrollTop()){
        $('.nav-links').addClass('black');
    }else {
        $('.nav-links').removeClass('black');
    }
});

window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {

        document.getElementById("navbar").style.background = "#ffffff";
        document.getElementById("navbar").style.boxShadow = "0 0 25px -12px #5a5a5a";
        document.getElementById("navbar").style.marginTop = "-10px";
        document.getElementById("navbar").style.paddingBottom = "10px";
        document.getElementById("logo").style.marginTop = "3px";
        document.getElementById("navbar").style.position = "fixed";
        document.getElementById("search").style.marginTop = "12px";
        document.getElementById("donate").style.marginTop = "15px";

    } else {
        document.getElementById("navbar").style.background = "none";
        document.getElementById("navbar").style.boxShadow = "none";
        document.getElementById("logo").style.marginTop = "0";
        document.getElementById("navbar").style.marginTop = "0";
    }
}
var map;
function initMap() {
    var m1 = {lat: 10.759258998114937, lng: 106.7633649868742},
        map = new google.maps.Map(document.getElementById('map'), {
            center: m1,
            zoom: 9
        });
    var marker = new google.maps.Marker({position: m1, map: map, label: ""});
}

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
        delay: 10000,
        disableOnInteraction: false,
    },
});