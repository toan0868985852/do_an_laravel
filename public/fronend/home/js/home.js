

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
        delay: 500,
        disableOnInteraction: false,
    },
});
