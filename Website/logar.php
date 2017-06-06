<?php
  include './classes/globais.php';
  include './classes/db.php';
  $db = new Db();
  $banco = $db->retornaDb();

  $email = "'" . $_POST['loginEmail'] . "'";
  $senha = "'" . $_POST['loginSenha'] . "'";

  echo '$email = ' . $email . "<br>";
  echo '$senha = ' . $senha . "<br>" . "<br>";

  if(isset($email) && isset($senha)) {
    $consulta = "SELECT * FROM alunos WHERE Email = $email AND Senha = $senha UNION ALL SELECT * FROM professores WHERE Email = $email AND Senha = $senha;";

    $resultado = $banco->query($consulta);
    var_dump($resultado);
    echo "<br><br><br>";
    $resultado = $resultado->fetchAll();
    var_dump($resultado);

    $tamanhoArray = count($resultado);

    // for($i = 0; $i < $tamanhoArray; $i++){
    //
    //   echo "Seu nome completo é : " . $resultado[$i]['Nome'] . "<br>";
    //   echo "Sua academia é : " .      $resultado[$i]['Nome_Academia'] . "<br>";
    //   echo "Sua idade é : " .         $resultado[$i]['Idade'] . "<br>";
    //   echo "Vocé é do sexo : " .      $resultado[$i]['Sexo'] . "<br>";
    //   echo "Seu email é : " .         $resultado[$i]['Email'] . "<br>";
    //   echo "Sua senha é : " .         $resultado[$i]['Senha'] . "<br>";
    // }
  }
?>
