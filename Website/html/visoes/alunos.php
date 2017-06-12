<?php 
    if (isset($_SESSION['id_usuario'])) {
        
        $idProfessor = "'" . $_SESSION['id_usuario'] . "'";

        $resultado = $conexao->query("
            SELECT id_aluno, nome_aluno
            FROM ficha
            WHERE id_professor = $idProfessor;
        ")->fetch_all();
    
?>
<section class="alunos">
    <h1 class="alunos-titulo">Meus Alunos</h1>
    <div class="alunos-lista">
        <?php
            if(!is_null($resultado)){
                foreach($resultado as $chave=>$valor){?>
                    <form action="./aluno" method="POST">
                        <button class="alunos-lista-botao" name="idAluno" type="submit" value="<?php echo $resultado[$chave][0];?>" > <?php echo $resultado[$chave][1]; ?> </button>
                    </form>
                <?php 
                }
            }
        ?>
    </div>
</section>
<?php 
    }
    else{
        header("location:./menu");
    }

?>