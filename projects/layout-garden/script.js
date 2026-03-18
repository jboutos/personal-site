let colorPicker = document.querySelector('.color');
let html = document.querySelector('html');

function updateHue() {
  html.style.setProperty('--hue-1', this.value);
  // 'this' refers to the input in this case
}