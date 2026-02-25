const buttons = document.querySelectorAll('section button');

buttons.forEach(button => {
  button.addEventListener('click', function() {

    const target = button.dataset.target;
    const section = document.getElementById(target);

    section.classList.toggle('hidden');

  });
});