animacaoNavegacao();

function animacaoNavegacao() {
  var $main         = document.querySelector('.main');
  var $navegacao    = document.querySelector('.navegacao');
  var $navegacaoBtn = $navegacao.querySelector('.navegacao-botao');

  var statusNavegacao = "aberto";

  $main.addEventListener('click', function() {
    if(statusNavegacao == "aberto") {
      $navegacao.classList.add('fechada');
      $navegacao.classList.remove('aberta');

      statusNavegacao = "fechado";
    }
  });

  $navegacaoBtn.addEventListener('click', function() {
    if(statusNavegacao == "fechado") {
      $navegacao.classList.add('aberta');
      $navegacao.classList.remove('fechada');

      statusNavegacao = "aberto";
    }
  });
}
