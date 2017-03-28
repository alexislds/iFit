alterarFormulario();

function alterarFormulario(){
  var $login         = document.querySelector('.login');
  var $cadastro      = document.querySelector('.cadastro');
  var $loginLink     = $login.querySelector('.login-texto');
  var $cadastroLink  = $cadastro.querySelector('.cadastro-texto');

  $loginLink.addEventListener('click', function(){
    console.log('Cliquei');
    $login.classList.add('esconde');
    $cadastro.classList.add('efeitoCartasEsquerda');  
    $login.classList.add('efeitoCartasDireita');
    setTimeout(function(){
    $cadastro.classList.remove('efeitoCartasEsquerda');  
    $login.classList.remove('efeitoCartasDireita');
    },500);  
      
    $cadastro.classList.remove('esconde');
  });

  $cadastroLink.addEventListener('click', function(){
    console.log('Cliquei');

    $cadastro.classList.add('esconde');
    $cadastro.classList.add('efeitoCartasDireita');  
    $login.classList.add('efeitoCartasEsquerda');
    setTimeout(function(){
           $cadastro.classList.remove('efeitoCartasDireita');  
           $login.classList.remove('efeitoCartasEsquerda');
    },500);
      
    $login.classList.remove('esconde');
  });
}
