
/**/
window.addEventListener('load', function() {
    setTimeout(function() {
      document.getElementById('loader').style.display = 'none';
      document.getElementById('pageContent').style.display = 'block';
       document.getElementById('navContent').style.display = 'flex';
    }, 1000);
  });



  let slideIndex = 0;

function showImages() {
  const slides = document.querySelectorAll('.carousel-images img');
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  } else if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }

  const slideWidth = slides[0].clientWidth;
  const offset = -slideIndex * slideWidth;

  document.querySelector('.carousel-images').style.transform = `translateX(${offset}px)`;
}

function prevImage() {
  slideIndex--;
  showImages();
}

function nextImage() {
  slideIndex++;
  showImages();
}



let autoplayInterval = setInterval(() => {
  slideIndex++;
  showImages();
}, 3000);

document.querySelector('.carousel').addEventListener('mouseenter', () => {
  clearInterval(autoplayInterval);
});

document.querySelector('.carousel').addEventListener('mouseleave', () => {
  autoplayInterval = setInterval(() => {
    slideIndex++;
    showImages();
  }, 3000);
});


