
<?php
 include './classes/db.php';

 $cadastroTipo = "'".$_POST['cadastroTipo']."'";
 $cadastroNome = "'".$_POST['cadastroNome']."'";
 $cadastroAcademia = "'".$_POST['cadastroAcademia']."'";
 $cadastroIdade = $_POST['cadastroIdade'];
 $cadastroSexo = "'".$_POST['cadastroSexo']."'";
 $cadastroEmail = "'".$_POST['cadastroEmail']."'";
 $cadastroSenha = "'".$_POST['cadastroSenha']."'";


echo $cadastroTipo."<br>";
echo $cadastroNome."<br>";
echo $cadastroAcademia."<br>";
echo $cadastroIdade."<br>";
echo $cadastroSexo."<br>";
echo $cadastroEmail."<br>";
echo $cadastroSenha."<br>";

 
    if($cadastroTipo == "'Aluno'"){
        $tipoTabela = "`".'alunos'."`";
        echo 1;
    }
    elseif($cadastroTipo == "'Professor'"){
        $tipoTabela = "`".'professores'."`";
        echo 2;
    }

    if(isset($tipoTabela)){
        $consulta = "INSERT INTO $tipoTabela (Nome,Nome_Academia,Idade,Sexo,Email,Senha) VALUES ($cadastroNome,$cadastroAcademia,$cadastroIdade,$cadastroSexo,$cadastroEmail,$cadastroSenha); ";
        $db->query("$consulta");
        echo 3;
    }
?>