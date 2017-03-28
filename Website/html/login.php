<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Lato|Raleway|Ubuntu+Mono" rel="stylesheet">
  <link rel="stylesheet" href="../css/import.css">
  <title>iFit</title>
</head>
<body>
  <?php include 'navegacao.php'; ?>
  <main class="main">
    <section class="login-limite limite">
      <div class="login">
          <h1 class="login-titulo">Login</h1>
          <input class="login-input login-email" type="text" placeholder="E-mail">
          <input class="login-input login-senha" type="password" placeholder="Senha">
          <p class="login-texto">Cadastrar</p>
          <button class="login-botao" type="submit"></button>
      </div>
     <div class="cadastro esconde">
          <h1 class="cadastro-titulo">Cadastro</h1>
          <input class="cadastro-input cadastro-nome" type="text" placeholder="Nome completo">
          <input class="cadastro-input cadastro-academia" type="text" placeholder="Nome da academia">
          <input class="cadastro-input cadastro-idade" type="number" placeholder="Idade">
          <input class="cadastro-input cadastro-sexo" type="text" placeholder="Sexo">
          <input class="cadastro-input cadastro-email" type="email" placeholder="E-mail">
          <input class="cadastro-input cadastro-senha" type="password" placeholder="Senha">
          <p class="cadastro-texto">Logar</p>
          <button class="cadastro-botao" type="submit"></button>
      </div>
    </section>
  </main>
  <script src="../js/navegacao.js"></script> 
  <script src="../js/jquery-3.1.1.min.js"></script>    
  <script src="../js/login.js"></script>
     
</body>
</html>
