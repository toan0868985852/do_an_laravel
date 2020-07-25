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

let timer = setInterval(autoplay, 20000);

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
