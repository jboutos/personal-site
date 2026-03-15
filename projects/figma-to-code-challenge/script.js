var body = document.querySelector('body');
var colorPicker = document.querySelector('.color');
var borderPicker = document.querySelector('.round');
var html = document.querySelector('html');
var container = document.querySelector('.test-container');

function updateHue() {
  html.style.setProperty('--hue1', this.value);
  // 'this' refers to the input in this case
}

function updateEdges() {
  html.style.setProperty('--radius', this.value + 'px');
}

body.addEventListener('click', function (event) {
  var toggle = event.target.closest('[rel="toggle"]');

  if (toggle) {
    body.classList.toggle('menu-open');
  }

  if (event.target.closest('#tricks')) {
    container.classList.toggle('hidden');
    event.target.closest('#tricks').classList.toggle('active');
  }
});

colorPicker.addEventListener('input', updateHue);

borderPicker.addEventListener('input', updateEdges);
