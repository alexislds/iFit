<?php
Class Roteador {

  public function rotear(){
    include 'rotas.php';

    $raiz = str_replace('index.php', '', $_SERVER['PHP_SELF']);
    $url  = str_replace($raiz,       '', $_SERVER['REQUEST_URI']);

    echo '$url gerada pelo rotear() : "' . $url . '"<br>';

    if (isset($rotas[$url])) {
      $arquivoHtml = "./html/".$rotas[$url].".php";
    }
    else {
      $arquivoHtml = "./html/erro.php";
    }

    return $arquivoHtml;
  }
}
?>