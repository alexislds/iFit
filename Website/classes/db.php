<?php

  $conexao = new mysqli("mysql4.gear.host", "ifit", "123japones*", "ifit");

  if ($conexao->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conexao->connect_errno . ")" . $conexao->connect_error;
  }
?>
