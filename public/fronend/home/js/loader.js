const loader = document.querySelector('.loader-img');
const main = document.querySelector('.main');

function init(){
    setTimeout(() => {
        loader.style.opacity = 0;
        loader.style.display = 'none';

        main.style.display = 'block';
        setTimeout(() => (main.style.opacity = 1), 50);
    }, 1000);
}
init();
