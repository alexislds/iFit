<section class="solicita-ficha">
    <h1 class="solicita-ficha-titulo">Solicitação de Ficha</h1>
    <form action="#" method="post" class="solicita-ficha-form">
        <div class="solicita-ficha-lista">
        <?php
           if(isset($_SESSION['id_usuario'])){
            echo "<div class='solicita-ficha-lista-item'>";
            echo "<label class='solicita-ficha-lista-label'>Voce gostaria de um professor com especialidade em que area? </label>";
            echo "<input class='solicita-ficha-lista-input' type='text' placeholder='Voce gostaria de um professor com especialidade em que area?'>";
            
            echo "<div class='solicita-ficha-lista-item'>";
            echo "<label class='solicita-ficha-lista-label'>Descreva brevemente o que necessita em sua ficha de treino, quanto mais melhor.</label>";
            echo "<input class='solicita-ficha-lista-input' type='text' placeholder='Descreva brevemente o que necessita em sua ficha de treino, quanto mais melhor.'>";
            
           }; 
        ?>    
            <div class="solicita-ficha-lista-botoes">
                <button class="solicita-ficha-lista-enviar" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</section>
