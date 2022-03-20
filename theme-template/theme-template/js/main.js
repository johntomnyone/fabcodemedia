var typed = new Typed('.element', {
    strings: ["New Digital", "Hot Digital"],
    typeSpeed: 30
  });

let i = 0;
let txt1 = 'Some are asking who can show us any good?';
let speed = 50;

function typeWriting() {
  if (i < txt1.length) {
    document.getElementsByClassName('element').innerHTML += txt1.charAt(i);
    i++;
    setTimeout(typeWriting, speed);
  }
  clearTimeout(typeWriting);
};

window.onload = () => {
  typeWriting();
};

window.onload = () => {
    alert('Do something');
}