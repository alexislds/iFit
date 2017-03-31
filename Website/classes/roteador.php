<?php
class Roteador {

  public function rotear($url){
    include 'rotas.php';

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