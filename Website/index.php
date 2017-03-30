<?php
  include 'globais.php';
  include 'roteador.php';

  $roteador = new Roteador();
  $roteador->criarRota('/', 'home');
  $roteador->criarRota('/conta', 'conta');
  $roteador->mapa();
  $arquivoHtml = $roteador->rotear();
?>

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
  <?php include './html/componentes/navegacao.php'; ?>
  <main class="main">
    <?php include("$arquivoHtml");?>
  </main>
  <?php include './html/componentes/javascript.php'; ?>
</body>
</html>
