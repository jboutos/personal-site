let colorPicker = document.querySelector('.color');
let html = document.querySelector('html');
let body = document.querySelector('body');

function updateHue() {
  html.style.setProperty('--hue-1', this.value);
  // 'this' refers to the input in this case
}

body.addEventListener('click', function(event) {

  // if the click happens on the toggle button...
  if ( event.target.closest('[rel="toggle"]') ) {
    event.preventDefault();
    body.classList.toggle('menu-open');
  }

});