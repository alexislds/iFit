<?php
 include './classes/db.php';
 $db = new Db();
 $banco = $db->retornaDb();

 $cadastroTipo     = "'" . $_POST['cadastroTipo'] . "'";
 $cadastroNome     = "'" . $_POST['cadastroNome'] . "'";
 $cadastroAcademia = "'" . $_POST['cadastroAcademia'] . "'";
 $cadastroIdade    = $_POST['cadastroIdade'];
 $cadastroSexo     = "'" . $_POST['cadastroSexo'] . "'";
 $cadastroEmail    = "'" . $_POST['cadastroEmail'] . "'";
 $cadastroSenha    = "'" . $_POST['cadastroSenha'] . "'";

 echo '$cadastroTipo = ' . $cadastroTipo . "<br>";
 echo '$cadastroNome = ' . $cadastroNome . "<br>";
 echo '$cadastroAcademia = ' . $cadastroAcademia . "<br>";
 echo '$cadastroIdade = ' . $cadastroIdade . "<br>";
 echo '$cadastroSexo = ' . $cadastroSexo . "<br>";
 echo '$cadastroEmail = ' . $cadastroEmail . "<br>";
 echo '$cadastroSenha = ' . $cadastroSenha . "<br>";

    if($cadastroTipo == 'Aluno'){
        $tipoTabela = "`" . 'alunos' . "`";
    }
    elseif($cadastroTipo == "'Professor'"){
        $tipoTabela = "`" . 'professores' . "`";
    }

    if(isset($tipoTabela)){
        $consulta = "INSERT INTO $tipoTabela (Nome, Nome_Academia, Idade, Sexo, Email, Senha) VALUES ($cadastroNome, $cadastroAcademia, $cadastroIdade, $cadastroSexo, $cadastroEmail, $cadastroSenha);";
        $banco->query("$consulta");
    }
?>
