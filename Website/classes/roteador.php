<?php
class Roteador {

  public function rotear($url){
    include 'rotas.php';

    if (isset($rotas[$url])) {
      $arquivoHtml = "./html/visoes/".$rotas[$url].".php";
    }
    else {
      $arquivoHtml = "./html/visoes/erro.php";
    }

    return $arquivoHtml;
  }
}
?>
