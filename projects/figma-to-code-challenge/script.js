var body = document.querySelector('body');

body.addEventListener('click', function (event) {
  var toggle = event.target.closest('[rel="toggle"]');

  if (toggle) {
    event.preventDefault();
    body.classList.toggle('menu-open');
  }
});