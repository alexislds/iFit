<?php

  $conexao = new mysqli("mysql3.gear.host", "ifitphp", "123japones*", "ifitphp");

  if ($conexao->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conexao->connect_errno . ")" . $conexao->connect_error;
  }
?>
