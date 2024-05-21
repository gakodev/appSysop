 const slider = document.querySelector('.carrosel');
    const items = document.querySelectorAll('.carrosel li');
    const itemWidth = items[0].offsetWidth + 16;
    let currentIndex = 0;

    function moveCarousel() {
      currentIndex = (currentIndex + 1) % items.length;
      const scrollLeft = currentIndex * itemWidth;
      slider.scrollTo({
        left: scrollLeft,
        behavior: 'smooth'
      });
      setTimeout(moveCarousel, 2000);
    }
    // Inicia a animação automática
    moveCarousel();
