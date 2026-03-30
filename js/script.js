const move = document.getElementById("move");
const form = document.querySelector('form');
const spinner = document.querySelector('#spinner');

// document.body.onpointermove = event => {
//     const { clientX, clientY } = event;

//     move.animate({
//         left: `${clientX}px`,
//         top: `${clientY}px`
    
//     }, {duration: 1000, fill: "forwards"})

// }
// const rotate = document.querySelector('.hello-container');

//rotate.addEventListener('mouseenter', () => {
//  rotate.style.transform = "rotate(20 deg) scale(1.2)";
//});

//rotate.addEventListener('mouseleave', () => {
//  rotate.style.transform = "rotate(0deg) scale(1)"; 
//});

if (form) {
    form.addEventListener('submit', function() {
        spinner.style.display = 'block';
    });
}

const images = document.querySelectorAll('.clickable-img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');

images.forEach(img => {
  img.addEventListener('click', () => {
    lightboxImg.src = img.src;
    lightbox.classList.add('active');
  });
});

lightbox.addEventListener('click', () => {
  lightbox.classList.remove('active');
});