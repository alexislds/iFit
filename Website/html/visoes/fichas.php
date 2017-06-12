<?php 

if(isset($_SESSION['id_usuario'])){
    $idUsuario = $_SESSION['id_usuario'];

    $resultado = $conexao->query("
      SELECT id_ficha, objetivo
      FROM Ficha
      WHERE id_aluno = $idUsuario;
    ")->fetch_all();


?>
<section class="fichas">
    <h1 class="fichas-titulo">Fichas</h1>
    <div class="fichas-lista">
        <?php
            if(!is_null($resultado)){
              foreach($resultado as $chave=>$valor){
            ?>  
              <form action="./ficha" method="post">
                <button class="aluno-fichas-lista-botao" name="idFicha" value="<?php echo $resultado[$chave][0]; ?>" type="submit"><?php echo $resultado[$chave][1]; ?></button>
              </form>
            <?php
             }
            }
            ?>
        <button class="fichas-lista-botao"><a class="fichas-lista-link" href="">Ficha de treino para quando eu tiver uma luta marcada</a></button>
        <button class="fichas-lista-botao"><a class="fichas-lista-link" href="#">Ficha de treino quando eu estiver acima do peso</a></button>
        <button class="fichas-lista-botao"><a class="fichas-lista-link" a href="#">Ficha de treino quando eu estiver acima do peso</a></button>
        <button class="fichas-lista-botao"><a class="fichas-lista-link" a href="#">Ficha de treino</a></button>
        <button class="fichas-lista-botao" type="button"><a class="fichas-lista-link" href="#">Ficha de treino</a></button>
        <button class="fichas-lista-botao"><a class="fichas-lista-link" href="">Ficha de treino para quando eu tiver uma luta marcada</a></button>
        <button class="fichas-lista-botao"><a class="fichas-lista-link" href="#">Ficha de treino quando eu estiver acima do peso</a></button>
        <button class="fichas-lista-botao"><a class="fichas-lista-link" a href="#">Ficha de treino quando eu estiver acima do peso</a></button>
        <button class="fichas-lista-botao"><a class="fichas-lista-link" a href="#">Ficha de treino</a></button>
    </div>
</section>
<?php
  }

  else{
        header("location:./menu");
  }
?>
