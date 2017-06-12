<?php
    if(isset($_SESSION['id_usuario'])){
        if(!empty($_POST)){
            if(isset($_POST['solicitaTipo'], $_POST['solicitaDescricao'])){
                $solicitaTipo = "'" . $_POST['solicitaTipo'] . "'";
                $solicitaDescricao = "'" . $_POST['solicitaDescricao'] . "'";
                $id = intval($_SESSION['id_usuario']);

                $conexao->query("

                    INSERT INTO SOLICITACAO_FICHA
                    (
                        id_usuario,
                        tipo,
                        descricao
                    )
                    VALUES
                    (
                        $id,
                        $solicitaTipo,
                        $solicitaDescricao
                    );

                ");

                header("location:./menu");

            }
        }
    }
    

?>
<section class="solicita-ficha">
    <h1 class="solicita-ficha-titulo">Solicitação de Ficha</h1>
    <form action="./solicitar-ficha" method="post" class="solicita-ficha-form">
        <div class="solicita-ficha-lista">
        <?php
           if(isset($_SESSION['id_usuario'])){ ?>
            <div class='solicita-ficha-lista-item'>
            <label class='solicita-ficha-lista-label'>Voce gostaria de um professor com especialidade em que area? </label>
            <input required class='solicita-ficha-lista-input' name='solicitaTipo' type='text' placeholder='Voce gostaria de um professor com especialidade em que area?'>
            </div>
            <div class='solicita-ficha-lista-item'>
            <label class='solicita-ficha-lista-label'>Descreva brevemente o que necessita em sua ficha de treino, quanto mais melhor.</label>
            <input required class='solicita-ficha-lista-input' name='solicitaDescricao' type='text' placeholder='Descreva brevemente o que necessita em sua ficha de treino, quanto mais melhor.'>
            </div>
            <div class="solicita-ficha-lista-botoes">
                <button class="solicita-ficha-lista-enviar" type="submit">Enviar</button>
            </div>
        <?php  
            } 
            else{
                header("location:./conta");
            }
        ?> 
        </div>
    </form>
</section>
