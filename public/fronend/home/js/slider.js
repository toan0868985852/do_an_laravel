window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

const slides = document.querySelector(".slider").children;
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const indicator = document.querySelector(".indicator")
let index = 0;

prev.addEventListener("click", function () {
    prevSlide();
    updateCircleIndicator();
    resetTimer();
});

next.addEventListener("click", function () {
    nextSlide();
    updateCircleIndicator();
    resetTimer();
});

function cricleIndicator() {
    for (let  i=0; i<slides.length; i++){
        const  div=document.createElement("div");
        div.setAttribute("onclick","indicateSlide(this)")
        div.id=i;
        if (i==0){
            div.className="active-slide";
        }
        indicator.appendChild(div);
    }
}

cricleIndicator();

function indicateSlide(element) {
    index=element.id;
    changeSlide();
    updateCircleIndicator();
    resetTimer();
}

function updateCircleIndicator() {
    for (let i=0; i<indicator.children.length; i++){
        indicator.children[i].classList.remove("active-slide");
    }
    indicator.children[index].classList.add("active-slide");
}

function prevSlide() {
    if (index==0){
        index=slides.length-1;
    }else{
        index--;
    }
    changeSlide();
}

function nextSlide() {
    if (index==slides.length-1){
        index=0;
    }else{
        index++;
    }
    changeSlide();
}

function changeSlide() {
    for (let i = 0; i < slides.length; i++){
        slides[i].classList.remove("active-slide");
    }
    slides[index].classList.add("active-slide");
}

function resetTimer() {
    clearInterval(timer);
    timer=setInterval(autoplay, 10000);
}

function autoplay() {
    nextSlide();
    updateCircleIndicator();
}

let timer = setInterval(autoplay, 10000);

// menu active
$(document).ready(function () {
    $('header ul li a').click(function() {
        if ($(this).hasClass('active')) {
            return;
        } else {
            $('.active').removeClass('active');
            $(this).addClass('active');
        }
    });

    $(".menu-toggler").click(function () {
        $(this).toggleClass("active-menu");
        $(".navbar-menu").toggleClass("active-menu");
    });
});

window.addEventListener('scroll',function () {
    const parallax = document.querySelector('.active-slide');
    let scrollPosition =  window.pageYOffset;

    parallax.style.transform = 'translateY('+ scrollPosition * .5 + 'px)';
});


window.addEventListener('scroll',function () {
    const parallax = document.querySelector('.js-conten');
    let scrollPosition =  window.pageYOffset;

    parallax.style.transform = 'translateY('+ scrollPosition * .1 + 'px)';
})

jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});


function session2box1() {
    var introText = document.querySelector('.session2-box1');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.8;

    if (introPosition < screenPosition) {
        introText.classList.add('session2-box1-show');
    }
}
window.addEventListener('scroll', session2box1);

function session2box2() {
    var introText = document.querySelector('.session2-box2');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.3;

    if (introPosition < screenPosition) {
        introText.classList.add('session2-box2-show');
    }
}
window.addEventListener('scroll', session2box2);

function session2box3() {
    var introText = document.querySelector('.session2-box3');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.8;

    if (introPosition < screenPosition) {
        introText.classList.add('session2-box3-show');
    }
}
window.addEventListener('scroll', session2box3);

function session251() {
    var introText = document.querySelector('.section2-5-1-img');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 2;

    if (introPosition < screenPosition) {
        introText.classList.add('section2-5-1-img-show');
    }
}

window.addEventListener('scroll', session251);


function section4img() {
    var introText = document.querySelector('.section4-img');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 2;

    if (introPosition < screenPosition) {
        introText.classList.add('section4-img-show');
    }
}
window.addEventListener('scroll', section4img);

function section6text() {
    var introText = document.querySelector('.chodi');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.5;

    if (introPosition < screenPosition) {
        introText.classList.add('chodi-text-show');
    }
}
window.addEventListener('scroll', section6text);

function section6img() {
    var introText = document.querySelector('.section6-img');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.5;

    if (introPosition < screenPosition) {
        introText.classList.add('section6-img-show');
    }
}
window.addEventListener('scroll', section6img);

function section7current1() {
    var introText = document.querySelector('.section7-current__1');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.5;

    if (introPosition < screenPosition) {
        introText.classList.add('section7-current__1-show');
    }
}
window.addEventListener('scroll', section7current1);

function section7current2() {
    var introText = document.querySelector('.section7-current__2');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.5;

    if (introPosition < screenPosition) {
        introText.classList.add('section7-current__2-show');
    }
}
window.addEventListener('scroll', section7current2);

function section7current3() {
    var introText = document.querySelector('.section7-current__3');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.1;

    if (introPosition < screenPosition) {
        introText.classList.add('section7-current__3-show');
    }
}
window.addEventListener('scroll', section7current3);

function section7current4() {
    var introText = document.querySelector('.section7-current__4');
    var introPosition = introText.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.1;

    if (introPosition < screenPosition) {
        introText.classList.add('section7-current__4-show');
    }
}
window.addEventListener('scroll', section7current4);

