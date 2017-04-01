<?php
class Despachador {

  function __construct() {

    $raiz = str_replace('index.php', '', $_SERVER['PHP_SELF']);
    $url  = str_replace($raiz, '', $_SERVER['REQUEST_URI']);

    $roteador    = new Roteador();
    $arquivoHtml = $roteador->rotear($url);

    include './html/layout.php';
  }
}
?>
