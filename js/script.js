// document.body.onpointermove = event => {
//     const { clientX, clientY } = event;

//     move.animate(
//         left: `${clientX}px`,
//         top: ` ${clientY}px`
    
//     }, {duration: 1000, fill: "forwards"})

// }
// const rotate = document.querySelector('.hello-container');

//rotate.addEventListener('mouseenter', () => {
//  rotate.style.transform = "rotate(20 deg) scale(1.2)";
//});

//rotate.addEventListener('mouseleave', () => {
//  rotate.style.transform = "rotate(0deg) scale(1)"; 
//});


const move = document.getElementById("move");
const form = document.querySelector('form');
const spinner = document.querySelector('#spinner');
const images = document.querySelectorAll('.clickable-img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');

let lastFocusedElement = null;

if (form) {
    form.addEventListener('submit', function() {
        spinner.style.display = 'block';
    });
}

function openLightbox(img) {

    lastFocusedElement = img;

    lightboxImg.src = img.src;
    lightbox.classList.add('active');

    lightbox.focus();
}

function closeLightbox() {
    lightbox.classList.remove('active');

    if (lastFocusedElement) {
        lastFocusedElement.setAttribute('tabindex', '-1');
        lastFocusedElement.focus();
    }
}

images.forEach(img => {
    img.addEventListener('click', () => openLightbox(img));
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && lightbox.classList.contains('active')) {
        closeLightbox();
    }
});

lightbox.addEventListener('click', () => {
    closeLightbox();
});