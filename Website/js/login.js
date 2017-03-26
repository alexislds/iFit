alterarFormulario();

function alterarFormulario(){
  var $login         = document.querySelector('.login');
  var $cadastro      = document.querySelector('.cadastro');
  var $loginLink     = $login.querySelector('.login-texto');
  var $cadastroLink  = $cadastro.querySelector('.cadastro-texto');

  $loginLink.addEventListener('click', function(){
    console.log('Cliquei');

    $login.classList.add('esconde');
    $cadastro.classList.remove('esconde');
  });

  $cadastroLink.addEventListener('click', function(){
    console.log('Cliquei');

    $cadastro.classList.add('esconde');
    $login.classList.remove('esconde');
  });
}
