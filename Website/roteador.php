<?php

Class Roteador {

  private $rotas = array();
  private $acoes = array();

  public function criarRota($url, $acao){
    $this->rotas[] = trim($url, '/');
    $this->acoes[] = $acao;
  }

  public function mapa(){
    pr($this->rotas);
    pr($this->acoes);
  }

  public function rotear(){
    $url = explode('/', $_SERVER['REQUEST_URI']);
    $url = array_slice($url, 3);
    $url = implode('/', $url);

    $chave = array_search($url, $this->rotas);

    if($chave === false) {
      $arquivoHtml = "./html/erro.php";
      return $arquivoHtml;
    }
    else{
      $arquivoHtml = "./html/" . $this->acoes[$chave] . ".php";
      return $arquivoHtml;
    }
  }
}

?>
