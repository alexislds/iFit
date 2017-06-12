<?php 
    if(isset($_SESSION['id_usuario'])){
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
    }
?>
<section class="solicitacao-ficha">
    <form action="./ficha" class="solicitacao-ficha-form" method="post">
        <input type="hidden" name="fichaSolicitacao" value="<?php echo $solicitacaoIdFicha; ?>">
        <input type="hidden" name="fichaAluno" value="<?php echo $solicitacaoIdAluno; ?>">
        <h1 class="solicitacao-ficha-titulo">Solicitação da Ficha</h1>
        <div class="solicitacao-ficha-especificacoes">
            <h1 class="solicitacao-ficha-especificacoes-titulo">Especificações</h1>
            <div class="solicitacao-ficha-especificacoes-lista">
               <div class="solicitacao-ficha-especificacoes-lista-item">
                  <label class="solicitacao-ficha-especificacoes-lista-label">A quanto tempo treina?</label>
                  <input  class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="A quanto tempo treina?"  value="<?php echo $tempo ?> ">
               </div>  
                <div class="solicitacao-ficha-especificacoes-lista-item">
                     <label class="solicitacao-ficha-especificacoes-lista-label">Qual meu foco</label>
                 <input  class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="Qual meu foco" value="<?php echo $foco ?>">
                </div> 
                <div class="solicitacao-ficha-especificacoes-lista-item">
                     <label class="solicitacao-ficha-especificacoes-lista-label">Altura</label>
                  <input  class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="Altura" value="<?php echo $altura ?>">
                </div> 
                <div class="solicitacao-ficha-especificacoes-lista-item">
                    <label class="solicitacao-ficha-especificacoes-lista-label">Peso</label>
                 <input  class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="Peso" value="<?php echo $peso ?>">
                </div> 

                <div class="solicitacao-ficha-especificacoes-lista-item">
                 <label class="solicitacao-ficha-especificacoes-lista-label">Problemas de saude,se sim qual?</label>
                 <input  class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="Problemas de saude,se sim qual?" value="<?php echo $saude ?>">
                </div>

                <div class="solicitacao-ficha-especificacoes-lista-item">
                  <label class="solicitacao-ficha-especificacoes-lista-label">Possui ou teve lesões,se sim qual?</label>
                 <input  class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="Possui ou teve lesões,se sim qual?" value="<?php echo $lesoes ?>">
                </div>
               <div class="solicitacao-ficha-especificacoes-lista-item">
                  <label class="solicitacao-ficha-especificacoes-lista-label">Pratica ou praticou algum esporte,se sim qual?</label>
                 <input  class="solicitacao-ficha-especificacoes-lista-input" type="text" placeholder="Pratica ou praticou algum esporte,se sim qual?" value="<?php echo $pratica ?>">
               </div> 
            </div>
        </div>
        <div class="solicitacao-ficha-dados">
            <h1 class="solicitacao-ficha-dados-titulo">Dados da Solicitação</h1>
            <div class="solicitacao-ficha-dados-lista">
              <div class="solicitacao-ficha-dados-lista-item">
                 <label class="solicitacao-ficha-dados-lista-label">Tipo de treino</label>
                 <input class="solicitacao-ficha-dados-lista-input" type="text" name="fichaTipo" placeholder="Tipo de treino" value="<?php echo $tipo ?>">
               </div>
               <div class="solicitacao-ficha-dados-lista-item">
                    <label class="solicitacao-ficha-dados-lista-label">Descrição</label>
                 <textarea  class="solicitacao-ficha-dados-lista-textarea" type="text" placeholder=">Descrição"><?php echo $descricao ?></textarea>
               </div> 
            </div>
        </div>
        <div class="solicitacao-ficha-botao">
            <button class="solicitacao-ficha-aceitar" type="submit">Aceitar</button>
        </div>
    </form>
</section>

 