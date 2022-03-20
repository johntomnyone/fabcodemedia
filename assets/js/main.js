let i = 0;
let txt1 = 'Hot Products';
let speed = 50;

function typeWriting() {
if (i < txt1.length) {
    document.querySelector('.element').innerHTML += " " + txt1.charAt(i);
    i++;
    setTimeout(typeWriting, speed);
}
};

window.onload = () => {
    typeWriting();
};

let showAside = document.querySelector('.body-container');
let hamburger = document.querySelector('.ham-ext-container');

function menu(x) {
    x.classList.toggle("change");
    showAside.classList.toggle('show-aside');
    hamburger.classList.toggle('change-ham-position');
};