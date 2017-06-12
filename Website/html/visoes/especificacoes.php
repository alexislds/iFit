<?php  
  if(isset($_SESSION['id_usuario'])){
    $id = intval($_SESSION['id_usuario']);

    if(!empty($_POST)) {
      $sqlTempo = "'" . $_POST['tempo'] . "'";
      $sqlAltura = "'" . $_POST['altura'] . "'";
      $sqlPeso = "'" . $_POST['peso'] . "'";
      $sqlFoco = "'" . $_POST['foco'] . "'";
      $sqlSaude = "'" . $_POST['saude'] . "'";
      $sqlLesoes = "'" . $_POST['lesoes'] . "'";
      $sqlPratica = "'" . $_POST['pratica'] . "'";

      $resultado = $conexao->query("
        SELECT *
        FROM ESPECIFICACAO
        WHERE id_usuario = $id;
      ")->fetch_assoc();

      if(is_null($resultado)){
        $conexao->query("
          INSERT INTO ESPECIFICACAO (
            id_usuario,
            altura,
            peso,
            tempo,
            foco,
            saude,
            lesoes,
            pratica
          )
          VALUES (
            $id,
            $sqlAltura,
            $sqlPeso,
            $sqlTempo,
            $sqlFoco,
            $sqlSaude,
            $sqlLesoes,
            $sqlPratica
          );
        ");
      }
      else{
        $conexao->query("
          UPDATE ESPECIFICACAO
          SET tempo = $sqlTempo, altura = $sqlAltura, peso = $sqlPeso, foco = $sqlFoco, saude = $sqlSaude, lesoes = $sqlLesoes, pratica = $sqlPratica
          WHERE id_usuario = $id;
        ");
      }
    }

    $resultado = $conexao->query("
      SELECT *
      FROM ESPECIFICACAO
      WHERE id_usuario = $id;
    ")->fetch_assoc();

    if(!is_null($resultado)){
      $tempo = $resultado['tempo'];
      $altura = $resultado['altura'];
      $peso = $resultado['peso'];
      $foco = $resultado['foco'];
      $saude = $resultado['saude'];
      $lesoes = $resultado['lesoes'];
      $pratica = $resultado['pratica'];
    }
    else{
      $tempo = '';
      $altura = '';
      $peso = '';
      $foco = '';
      $saude = '';
      $lesoes = '';
      $pratica = '';
    }
  }
?>

<section class="especificacoes">
    <h1 class="especificacoes-titulo">Especificacoes</h1>
    <form action="./especificacoes" method="post" class="especificacoes-form">
        <div class="especificacoes-lista">
         <?php if(isset($_SESSION['id_usuario'])) { ?>
               <div class='especificacoes-lista-item'>
               <label class='especificacoes-lista-label'>A quanto tempo treina e quantos dias na semana você treina?</label> 
               <input class='especificacoes-lista-input' name='tempo' type='text' value='<?php echo $tempo ?>'>
               </div>

               <div class='especificacoes-lista-item'>
               <label class='especificacoes-lista-label'>Qual meu foco:</label>
               <input class='especificacoes-lista-input' name='foco' type='text' value='<?php echo $foco ?>'>
               </div>


               <div class='especificacoes-lista-item'>
               <label class='especificacoes-lista-label'>Altura:</label>
               <input class='especificacoes-lista-input' name='altura' type='text' value='<?php echo $altura ?>'>
               </div>

               <div class='especificacoes-lista-item'>
               <label class='especificacoes-lista-label'>Peso:</label>
               <input class='especificacoes-lista-input' name='peso' type='text' value='<?php echo $peso ?>'>
               </div>

               <div class='especificacoes-lista-item'>
               <label class='especificacoes-lista-label'>Problemas de saude,se sim qual?</label>
               <input class='especificacoes-lista-input' name='saude' type='text' value='<?php echo $saude ?>'>
               </div>

               <div class='especificacoes-lista-item'>
               <label class='especificacoes-lista-label'>Possui ou teve lesões,se sim qual?</label>
               <input class='especificacoes-lista-input' name='lesoes' type='text' value='<?php echo $lesoes ?>'>
               </div>

               <div class='especificacoes-lista-item'>
               <label class='especificacoes-lista-label'>Pratica ou praticou algum esporte,se sim qual?</label>
               <input class='especificacoes-lista-input' name='pratica' type='text' value='<?php echo $pratica ?>'>

               <div class="especificacoes-lista-botoes">
                  <button class="especificacoes-lista-editar" type="button">Editar</button>
                  <button class="especificacoes-lista-salvar" type="submit">Salvar</button>
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
