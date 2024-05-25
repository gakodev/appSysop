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

  var cnpj = document.getElementById('input2').value
  var telefone = document.getElementById('input3').value
  var email = document.getElementById('input4').value 
  var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if(!re.test(email) || telefone.length != '14' || cnpj.length != '18' ){
    alert("Dados incorretos!")
    return false  
  } else return true;



    

    


  }

  
  // EXPRESSÃO REGULAR PARA FORMATAÇÃO DOS CAMPOS

// Função para validar CNPJ
const inputCNPJ = document.getElementById('input2');
inputCNPJ.addEventListener("keyup", validarCNPJ);

function validarCNPJ(e) {
  var v = e.target.value.replace(/\D/g, "");
  v = v.replace(/^(\d{2})(\d)/, "$1.$2");
    v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
    v = v.replace(/^(\d{2})\.(\d{3})\.(\d{3})/, "$1.$2.$3/");
    v = v.replace(/(\d{4})(\d)/, "$1-$2");
    e.target.value = v;
}
    
// Função para validar telefone
const inputTelefone = document.getElementById('input3');
inputTelefone.addEventListener("keyup", validarTelefone);

function validarTelefone(e) {
  var v=e.target.value.replace(/\D/g,"");
  var v=v.replace(/^(\d\d)(\d)/g,"($1)$2");
  var v=v.replace(/(\d{5})(\d)/,"$1-$2");
  e.target.value = v;
}

// Função para validar email
function validarEmail() {
  
}









