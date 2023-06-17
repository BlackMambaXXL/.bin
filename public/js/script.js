// Слайдер
let offset = 0;
const sliderLine = document.querySelector('.slider-line');

document.querySelector('.slider-button__next').addEventListener('click', function(e){
  offset = offset + 650;
  if (offset > 2600) {
    offset = 0;
  }
  sliderLine.style.left = -offset + 'px';
  e.preventDefault();
});

document.querySelector('.slider-button__prev').addEventListener('click', function(e){
  offset = offset - 650;
  if (offset < 0) {
    offset = 2600;
  }
  sliderLine.style.left = -offset + 'px';
  e.preventDefault();
});

