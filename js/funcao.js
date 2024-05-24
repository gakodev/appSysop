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

    function validaCampos() {
      const campo1 = document.getElementById('input1').value;
      const campo2 = document.getElementById('input2').value;
      const campo3 = document.getElementById('input3').value;
      const campo4 = document.getElementById('input4').value;
      const campo5 = document.getElementById('input5').value;
      const campo6 = document.getElementById('input6').value;
      const campo7 = document.getElementById('input7').value;
  
      // Verifica se algum campo está vazio
      if (campo1 === '' || campo2 === '' || campo3 === '' || campo4 === '' || campo5 === '' || campo6 === '' || campo7 === '') {
          alert('Por favor, preencha todos os campos.');
          return false; 
      }
      return true;
  }
