<?php 

    $resultado = $conexao->query("

        SELECT SOLICITACAO_FICHA.id_solicitacao_ficha, SOLICITACAO_FICHA.id_usuario, USUARIO.nome
        FROM SOLICITACAO_FICHA
        INNER JOIN USUARIO
        ON SOLICITACAO_FICHA.id_usuario = USUARIO.id_usuario;


    ")->fetch_all();

?>
<section class="solicitacoes-ficha">
    <h1 class="solicitacoes-ficha-titulo">Solicitações de Fichas</h1>
    <div class="solicitacoes-ficha-lista">
        <?php 

        foreach($resultado as $chave=>$valor){
        ?>  
            <form class="solicitacoes-ficha-lista-form" action="./solicitacao-ficha" method="post">
                <input type="hidden" name="solicitacaoIdFicha" value="<?php echo $resultado[$chave][0];?>">
                <input type="hidden" name="solicitacaoIdAluno" value="<?php echo $resultado[$chave][1];?>">
                <button class="solicitacoes-ficha-lista-botao" type="submit"><?php echo $resultado[$chave][2];?></button>
            </form>
        <?php
        }
        ?>
    </div>
</section>
