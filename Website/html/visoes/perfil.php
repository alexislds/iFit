<?php

    if(isset($_SESSION['id_usuario'])){
        $id = "'" . $_SESSION['id_usuario'] . "'";

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
    <form action="#" method="post" class="perfil-form">
        <div class="perfil-lista">
            <?php 
                if(isset($_SESSION['id_usuario'])){
                    echo "<div class='perfil-lista-item'>";
                    echo "<label class='perfil-lista-label'>Seu email:</label>";
                    echo "<input class='perfil-lista-input' type='text' placeholder='Seu email:' value='$email' disabled>";
                    echo "</div>";

                    echo "<div class='perfil-lista-item' >";
                    echo "<label class='perfil-lista-label'>Sua senha:</label>";
                    echo "<input class='perfil-lista-input' type='text' placeholder='Sua senha:'  value='$senha' disabled>";
                    echo "</div>";

                    echo "<div class='perfil-lista-item'>";
                    echo "<label class='perfil-lista-label'>Seu nome:</label>";
                    echo "<input class='perfil-lista-input' type='text' placeholder='Seu nome:'  value='$nome' disabled>";
                    echo "</div>";

                    echo "<div class='perfil-lista-item'>";
                    echo "<label class='perfil-lista-label'>Sua academia:</label>";
                    echo "<input class='perfil-lista-input' type='text' placeholder='Sua academia'  value='$academia' disabled>";
                    echo "</div>";

                    echo "<div class='perfil-lista-item'>";
                    echo "<label class='perfil-lista-label'>Sexo:</label>";
                    echo "<input class='perfil-lista-input' type='text' placeholder='Seu sexo'  value='$sexo' disabled>";
                    echo "</div>";

                    echo "<div class='perfil-lista-item'>";
                    echo "<label class='perfil-lista-label'>Sua idade:</label>";
                    echo "<input class='perfil-lista-input' type='text' placeholder='Sua idade'  value='$idade' disabled>";
                    echo "</div>";
                }
            ?>
            <div class="perfil-lista-botoes">
                <button class="perfil-lista-editar" type="button">Editar</button>
                <button class="perfil-lista-salvar" type="submit">Salvar</button>
            </div>
        </div>
    </form>
</section>