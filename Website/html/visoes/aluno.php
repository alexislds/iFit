<?php 

  if(isset($_SESSION['id_usuario'])){
    $idAluno = intval($_POST['idAluno']);

    $resultado1 = $conexao->query("
      SELECT *
      FROM Especificacao
      WHERE id_usuario = $idAluno;
    ")->fetch_assoc();

    $tempo = $resultado1['tempo'];
    $foco = $resultado1['foco'];
    $peso =  $resultado1['peso'];
    $altura = $resultado1['altura'];
    $lesoes = $resultado1['lesoes'];
    $saude = $resultado1['saude'];
    $pratica = $resultado1['pratica'];

    $resultado2 = $conexao->query("
      SELECT id_ficha, objetivo
      FROM Ficha
      WHERE id_aluno = $idAluno;
    ")->fetch_all();

    if(!is_null($resultado2) && !is_null($resultado1)){


?>

<section class="aluno">
    <h1 class="aluno-titulo">Aluno</h1>
    <div class="aluno-especificacoes">
        <h1 class="aluno-especificacoes-titulo">Especificações</h1>
        <form action="#" method="post" class="especificacoes-form">
            <div class="aluno-especificacoes-lista">

              <div class="aluno-especificacoes-lista-item">
                  <label class="aluno-especificacoes-lista-label">A quanto tempo treina?</label>
                  <input required class="aluno-especificacoes-lista-input" type="text" placeholder="A quanto tempo treina?"  value="<?php echo $tempo ?> ">
             </div> 

              <div class="aluno-especificacoes-lista-item">
                   <label class="aluno-especificacoes-lista-label">Qual meu foco</label>
                    <input required class="aluno-especificacoes-lista-input" type="text" placeholder="Qual meu foco" value="<?php echo $foco ?>">
                </div>	
 
              <div class="aluno-especificacoes-lista-item">
                     <label class="aluno-especificacoes-lista-label">Altura</label>
               		 <input required class="aluno-especificacoes-lista-input" type="text" placeholder="Altura" value="<?php echo $altura ?>">
              </div>	

                <div class="aluno-especificacoes-lista-item">
               	    <label class="aluno-especificacoes-lista-label">Peso</label>
                	<input required class="aluno-especificacoes-lista-input" type="text" placeholder="Peso" value="<?php echo $peso ?>">
                </div>	

              <div class="aluno-especificacoes-lista-item">
	                <label class="aluno-especificacoes-lista-label">Problemas de saude,se sim quais?</label>
	                <input required class="aluno-especificacoes-lista-input" type="text" placeholder="Problemas de saude,se sim qual?" value="<?php echo $saude ?>">
               </div>

               <div class="aluno-especificacoes-lista-item">
	                 <label class="aluno-especificacoes-lista-label">Possui ou teve lesões,se sim quais?</label>
	                <input required class="aluno-especificacoes-lista-input" type="text" placeholder="Possui ou teve lesões,se sim qual?" value="<?php echo $lesoes ?>">
               </div>

                 <div class="aluno-especificacoes-lista-item">
	                 <label class="aluno-especificacoes-lista-label">Pratica ou praticou algum esporte,se sim qual?</label>
	                <input required class="aluno-especificacoes-lista-input" type="text" placeholder="Pratica ou praticou algum esporte,se sim qual?" value="<?php echo $pratica ?>">
               </div>
              
            </div> 
        </form> 
    </div>
    <div class="aluno-fichas">
        <h1 class="aluno-fichas-titulo">Fichas</h1>
        <div class="aluno-fichas-lista">
            <?php
              foreach($resultado2 as $chave=>$valor){
            ?>  
              <form action="./ficha" method="post">
                <button class="aluno-fichas-lista-botao" name="idFicha" value="<?php echo $resultado2[$chave][0]; ?>" type="submit"><?php echo $resultado2[$chave][1]; ?></button>
              </form>
            <?php
              }
            ?>
        </div>
    </div>
</section>
<?php
  }
  }

  else{
        header("location:./menu");
  }
?>
