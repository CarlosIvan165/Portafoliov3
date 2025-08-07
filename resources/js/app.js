import './bootstrap';

const carousel = document.getElementById('carousel');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
    
    const toggleBtn = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  toggleBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

    const totalSlides = carousel.children.length;
    let index = 0;

    function updateCarousel() {
        carousel.style.transform = `translateX(-${index * 100}%)`;
    }

    prev.addEventListener('click', () => {
        index = (index - 1 + totalSlides) % totalSlides;
        updateCarousel();
    });

    next.addEventListener('click', () => {
        index = (index + 1) % totalSlides;
        updateCarousel();
    });

