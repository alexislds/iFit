<?php
  class Db {
    private $banco = null;

    public function __construct() {
      $host    = 'mysql:host=mysql4.gear.host;';
      $nome    = 'dbname=ifit';
      $usuario = 'ifit';
      $senha   = '123japones*';

      try {
        $banco = new PDO("$host $nome", $usuario, $senha);

        $this->banco = $banco;
      }

      catch(PDOException $e) {
        echo $e;
      }
    }

    public function adicionar(){
      $banco = $this->banco;
      $sql   = "INSERT INTO usuarios (usuario, senha, nome) VALUES ('funcao', 'lalalala', 'testandooooo')";

      $banco->query($sql);
    }

    public function retornaDb(){
      return $this->banco;
    }
  }
?>
