<?php 
    if(isset($_SESSION['id_usuario'])){
        $idUsuario = intval($_SESSION['id_usuario']);

        if(!empty($_POST)){
            $idUsuario = intval($_SESSION['id_usuario']);
            $nomeProfessor = "'" . $_SESSION['nome'] . "'";

            if(isset($_POST['fichaSolicitacao'], $_POST['fichaAluno'], $_POST['fichaTipo'])) {
                $idProfessor = intval($_SESSION['id_usuario']);
                $fichaSolicitacao = intval($_POST['fichaSolicitacao']);
                $idAluno = intval($_POST['fichaAluno']);
                $fichaTipo = "'" . $_POST['fichaTipo'] . "'";

                $resultado = $conexao->query("

                    SELECT nome
                    FROM Usuario
                    WHERE id_usuario = $idAluno;

                ")->fetch_assoc();

                $nomeAluno = "'" . $resultado['nome'] . "'";

                $conexao->query("
                
                    INSERT INTO Ficha
                    (
                        id_aluno,
                        id_professor,
                        nome_aluno,
                        nome_professor,
                        objetivo,
                        data_atualizacao
                    )
                    VALUES 
                    (
                        $idAluno,
                        $idProfessor,
                        $nomeAluno,
                        $nomeProfessor,
                        $fichaTipo,
                        CURDATE()
                    );
                ");
            }
        }

        $resultadoFicha = $conexao->query("
            SELECT id_ficha, nome_aluno, nome_professor, objetivo, observacoes, data_atualizacao
            FROM Ficha
            WHERE id_aluno = $idUsuario OR id_professor = $idUsuario;
        ")->fetch_assoc();
        
        $idFicha = "'" . $resultadoFicha['id_ficha'] . "'";

        $resultadoExercicio = $conexao->query("
            SELECT dia_semana, exercicio, grupo_muscular, numero_maquina, sessoes, repeticoes, carga
            FROM Exercicio
            WHERE id_ficha = $idFicha;
        ")->fetch_all();
    }
?>
<section class="ficha">
    <?php if(isset($_SESSION['id_usuario'])) { ?>
    <h1 class="ficha-titulo">Ficha de Treino</h1>
    <div class="ficha-conteudo">
        <div class="ficha-conteudo-cima">
            <input type="text" class="ficha-conteudo-cima-campo" placeholder="Nome do aluno" value="<?php echo $resultadoFicha['nome_aluno']; ?>">
            <input type="text" class="ficha-conteudo-cima-campo" placeholder="Nome do professor" value="<?php echo $resultadoFicha['nome_professor']; ?>">
            <input type="text" class="ficha-conteudo-cima-campo" placeholder="Objetivo da ficha" value="<?php echo $resultadoFicha['objetivo']; ?>">
            <input type="text" class="ficha-conteudo-cima-campo" placeholder="Observações" value="<?php echo $resultadoFicha['observacoes']; ?>">
            <input type="text" class="ficha-conteudo-cima-campo ficha-conteudo-cima-data" placeholder="Data de atualização" value="<?php echo $resultadoFicha['data_atualizacao']; ?>">
        </div>
        <div class="ficha-conteudo-baixo">
            <div class="ficha-conteudo-baixo-treino">
                <table class="ficha-conteudo-baixo-treino-tabela">
                    <thead>
                        <tr>
                            <th class="ficha-conteudo-baixo-treino-titulos">Dia da Semana</th>
                            <th class="ficha-conteudo-baixo-treino-titulos">Exercicio</th>
                            <th class="ficha-conteudo-baixo-treino-titulos">Grupo Muscular</th>
                            <th class="ficha-conteudo-baixo-treino-titulos">Numero da Maquina</th>
                            <th class="ficha-conteudo-baixo-treino-titulos">Sessões</th>
                            <th class="ficha-conteudo-baixo-treino-titulos">Repetições</th>
                            <th class="ficha-conteudo-baixo-treino-titulos">Carga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($resultadoExercicio as $chave => $valor) {
                                echo "<tr>";
                                foreach($resultadoExercicio[$chave] as $valor2){
                                    echo "<td class='ficha-conteudo-baixo-treino-dado'>$valor2</td>";
                                }
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="ficha-botoes">
         <button class="ficha-botoes-editar" type="button">Editar</button>
         <button class="ficha-botoes-salvar" type="submit">Salvar</button>
    </div>
    <?php 
        }
        else{
            header("location:./conta");
        }
    ?>
</section>