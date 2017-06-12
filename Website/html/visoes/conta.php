<?php
    if(!empty($_POST)){
      if(isset($_POST["cadastroTipo"], $_POST["cadastroNome"], $_POST["cadastroIdade"], $_POST["cadastroSexo"], $_POST["cadastroEmail"], $_POST["cadastroSenha"])){
         $cadastroTipo = $_POST["cadastroTipo"];
         $cadastroNome = "'" . $_POST["cadastroNome"] . "'";
         $cadastroAcademia = "'" . $_POST["cadastroAcademia"] . "'";
         $cadastroIdade = intval($_POST["cadastroIdade"]);
         $cadastroSexo = "'" . $_POST["cadastroSexo"] . "'";
         $cadastroEmail = "'" . $_POST["cadastroEmail"] . "'";
         $cadastroSenha = "'" . $_POST["cadastroSenha"] . "'";

         if($cadastroTipo == "Aluno"){
              $conexao->query("
                  INSERT INTO USUARIO (
                      id_usuario_tipo,email,senha,nome,academia,sexo,idade
                  )
                  VALUES (
                      2,
                      $cadastroEmail,
                      $cadastroSenha,
                      $cadastroNome,
                      $cadastroAcademia,
                      $cadastroSexo,
                      $cadastroIdade
                  );
              ");
         }

         elseif($cadastroTipo == "Professor"){
              $conexao->query("
                  INSERT INTO USUARIO (
                      id_usuario_tipo,email,senha,nome,academia,sexo,idade
                  )
                  VALUES (
                      1,
                      $cadastroEmail,
                      $cadastroSenha,
                      $cadastroNome,
                      $cadastroAcademia,
                      $cadastroSexo,
                      $cadastroIdade
                  );
              ");
         }
      }

      elseif(isset($_POST['loginEmail'], $_POST['loginSenha'])){
        $loginEmail = "'" . $_POST['loginEmail'] . "'";
        $loginSenha = "'" . $_POST['loginSenha'] . "'";

        $resultado = $conexao->query("
            SELECT id_usuario,id_usuario_tipo,nome,email,senha
            FROM USUARIO
            WHERE email = $loginEmail AND senha = $loginSenha; 
        ")->fetch_assoc();

        if(is_null($resultado)){
            echo "Não encontrei";
        }

        else {
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['tipo'] = $resultado['id_usuario_tipo'];            

            header("location:./menu");
        }
      }
    }  
?>
<section class="login-limite">
    <form action="conta" method="post">
        <div class="login">
            <h1 class="login-titulo">Login</h1>
            <input  required class="login-input login-email" name="loginEmail" type="text" placeholder="E-mail">
            <input required class="login-input login-senha" name="loginSenha" type="password" placeholder="Senha">
            <p class="login-texto">Cadastrar</p>
            <button class="login-botao" type="submit"></button>
        </div>
    </form>
    <form action="conta" method="post">
        <div class="cadastro esconde">
            <h1 class="cadastro-titulo">Cadastro</h1>
            <div class="cadastro-opcoes">
                <div class="cadastro-opcoes-aluno">
                    <input required class="cadastro-opcoes-radio" type="radio" name="cadastroTipo" value="Aluno" checked>
                    <p class="cadastro-opcoes-texto">Aluno</p>
                </div>
                <div class="cadastro-opcoes-professor">
                    <input required class="cadastro-opcoes-radio" type="radio" name="cadastroTipo" value="Professor">
                    <p class="cadastro-opcoes-texto">Professor</p>
                </div>
            </div>
            <input required class="cadastro-input cadastro-nome" name="cadastroNome" type="text" placeholder="Nome completo">
            <input required class="cadastro-input cadastro-academia" name="cadastroAcademia" type="text" placeholder="Nome da academia">
            <input required class="cadastro-input cadastro-idade" name="cadastroIdade" type="number" placeholder="Idade">
            <input required class="cadastro-input cadastro-sexo" name="cadastroSexo" type="text" placeholder="Sexo">
            <input required class="cadastro-input cadastro-email" name="cadastroEmail" type="email" placeholder="E-mail">
            <input required class="cadastro-input cadastro-senha" name="cadastroSenha" type="password" placeholder="Senha">
            <p class="cadastro-texto">Logar</p>
            <button class="cadastro-botao" type="submit"></button>
        </div>
    </form>
</section> 