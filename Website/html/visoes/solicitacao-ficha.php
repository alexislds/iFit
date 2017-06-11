<?php 

    if(!empty($_POST)){
        $solicitacaoIdFicha = intval($_POST['solicitacaoIdFicha']);
        $solicitacaoIdAluno =  intval($_POST['solicitacaoIdAluno']);

        $resultado = $conexao->query("

            SELECT *
            FROM ESPECIFICACAO
            WHERE id_usuario = $solicitacaoIdAluno;

        ")->fetch_assoc();

        $resultado2 = $conexao->query("

            SELECT *
            FROM SOLICITACAO_FICHA
            WHERE id_solicitacao_ficha = $solicitacaoIdFicha;

        ")->fetch_assoc();

        if(!is_null($resultado) && !is_null($resultado2)){
            $tempo = $resultado['tempo'];
            $foco = $resultado['foco'];
            $peso =  $resultado['peso'];
            $altura = $resultado['altura'];
            $lesoes = $resultado['lesoes'];
            $saude = $resultado['saude'];
            $pratica = $resultado['pratica'];

            $tipo = $resultado2['tipo'];
            $descricao = $resultado2['descricao'];
        }
    }

?>
<section class="solicitacao-ficha">
    <form action="./ficha" class="solicitacao-ficha-form" method="post">
        <input type="hidden" name="fichaSolicitacao">
        <input type="hidden" name="fichaAluno">
        <h1 class="solicitacao-ficha-titulo">Solicitação da Ficha</h1>
        <div class="solicitacao-ficha-especificacoes">
            <h1 class="solicitacao-ficha-especificacoes-titulo">Especificações</h1>
            <div class="solicitacao-ficha-especificacoes-lista">
                <input class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="teste" value="<?php echo $tempo ?>">
                <input class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="teste" value="<?php echo $foco ?>">
                <input class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="teste" value="<?php echo $altura ?>">
                <input class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="teste" value="<?php echo $peso ?>">
                <input class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="teste" value="<?php echo $saude ?>">
                <input class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="teste" value="<?php echo $lesoes ?>">
                <input class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="teste" value="<?php echo $pratica ?>">
            </div>
        </div>
        <div class="solicitacao-ficha-dados">
            <h1 class="solicitacao-ficha-dados-titulo">Dados da Solicitação</h1>
            <div class="solicitacao-ficha-dados-lista">
                <input class="solicitacao-ficha-dados-lista-input" type="text" name="fichaTipo" placeholder="teste" value="<?php echo $tipo ?>">
                <textarea class="solicitacao-ficha-dados-lista-input" type="text" placeholder="teste"><?php echo $descricao ?></textarea>
            </div>
        </div>
        <div class="solicitacao-ficha-botao">
            <button class="solicitacao-ficha-aceitar" type="submit">Aceitar</button>
        </div>
    </form>
</section>

 