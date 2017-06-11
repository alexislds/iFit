<?php

    if(isset($_SESSION['id_usuario'])){
        $id = intval($_SESSION['id_usuario']);

        if(!empty($_POST)){
            if(isset($_POST["perfilSenha"], $_POST["perfilNome"], $_POST["perfilAcademia"], $_POST["perfilSexo"], $_POST["perfilIdade"])){
                $perfilSenha = "'" . $_POST["perfilSenha"] . "'";
                $perfilNome = "'" . $_POST["perfilNome"] . "'";
                $perfilAcademia = "'" . $_POST["perfilAcademia"] . "'";
                $perfilSexo = "'" . $_POST["perfilSexo"] . "'";
                $perfilIdade = intval($_POST["perfilIdade"]);

                $conexao->query("
                    UPDATE USUARIO
                    SET senha = $perfilSenha, nome = $perfilNome, academia = $perfilAcademia, sexo = $perfilSexo, idade = $perfilIdade
                    WHERE id_usuario = $id;
                ");
            } 
        }
        

        $resultado = $conexao->query("
        SELECT email, senha, nome, academia, sexo, idade FROM USUARIO WHERE id_usuario = $id;
        ")->fetch_assoc();

        $email = $resultado['email'];
        $senha = $resultado['senha'];
        $nome = $resultado['nome'];
        $academia = $resultado['academia'];
        $sexo = $resultado['sexo'];
        $idade = $resultado['idade'];
    }

    else{
        header("location:./conta");
    }
?>
<section class="perfil">
    <h1 class="perfil-titulo">Perfil</h1>
    <form action="./perfil" method="post" class="perfil-form">
        <div class="perfil-lista">
            <?php 
                if(isset($_SESSION['id_usuario'])){
            ?>
                    <div class='perfil-lista-item'>
                    <label class='perfil-lista-label'>Seu email:</label>
                    <input class='perfil-lista-input' name='perfilEmail' type='text' placeholder='Seu email:' value='<?php echo $email; ?>' disabled>
                    </div>

                    <div class='perfil-lista-item' >
                    <label class='perfil-lista-label'>Sua senha:</label>
                    <input class='perfil-lista-input perfilJs' name='perfilSenha' type='text' placeholder='Sua senha:'  value='<?php echo $senha; ?>' disabled>
                    </div>

                    <div class='perfil-lista-item'>
                    <label class='perfil-lista-label'>Seu nome:</label>
                    <input class='perfil-lista-input perfilJs' name='perfilNome' type='text' placeholder='Seu nome:'  value='<?php echo $nome; ?>' disabled>
                    </div>

                    <div class='perfil-lista-item'>
                    <label class='perfil-lista-label'>Sua academia:</label>
                    <input class='perfil-lista-input perfilJs' name='perfilAcademia' type='text' placeholder='Sua academia'  value='<?php echo $academia; ?>' disabled>
                    </div>

                    <div class='perfil-lista-item'>
                    <label class='perfil-lista-label'>Sexo:</label>
                    <input class='perfil-lista-input perfilJs' name='perfilSexo' type='text' placeholder='Seu sexo'  value='<?php echo $sexo; ?>' disabled>
                    </div>

                    <div class='perfil-lista-item'>
                    <label class='perfil-lista-label'>Sua idade:</label>
                    <input class='perfil-lista-input perfilJs' name='perfilIdade' type='text' placeholder='Sua idade'  value='<?php echo $idade; ?>' disabled>
                    </div>
            <?php 
            }
            else{
                header("location:./conta");
            }

           ?>
            <div class="perfil-lista-botoes">
                    <button class="perfil-lista-editar" type="button">Editar</button>
                    <button class="perfil-lista-salvar" type="submit">Salvar</button>
            </div>
        </div>
    </form>
</section>