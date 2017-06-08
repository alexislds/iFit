<section class="menu">
    <h1 class="menu-titulo">Menu</h1>
    <img src="./img/img-perfil.jpg" class="menu-foto">
    <div class="menu-lista">
    	<?php 
			if(isset($_SESSION['id_usuario'])){
				$id = "'" . $_SESSION['id_usuario'] . "'";

				$resultado1 = $conexao->query("
					SELECT id_aluno FROM ALUNO WHERE id_usuario = $id;
				")->fetch_assoc();

				if($resultado1 == true){
        			echo "<button class='menu-lista-botao' type='button'><a class='menu-lista-link' href='./perfil'>Meu perfil</a></button>";
        			echo "<button class='menu-lista-botao'><a class='menu-lista-link' href='./alunos'>Minhas Fichas</a></button>";
        			echo "<button class='menu-lista-botao'><a class='menu-lista-link' href='./solicitacoes-fichas'>Solicitar Fichas</a></button>";
        			echo "<button class='menu-lista-botao'><a class='menu-lista-link' a href='#'>Especificacoes</a></button>";
				}
				else{
					echo "<button class='menu-lista-botao' type='button'><a class='menu-lista-link' href='./perfil'>Meu perfil</a></button>";
        			echo "<button class='menu-lista-botao'><a class='menu-lista-link' href='./alunos'>Meus alunos</a></button>";
        			echo "<button class='menu-lista-botao'><a class='menu-lista-link' href='./solicitacoes-fichas'>Solicitações de Fichas</a></button>";
				}
			}
			else{
				header("location:./conta");
			}
		?>
        
    </div>
</section>