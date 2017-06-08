<section class="especificacoes">
    <h1 class="especificacoes-titulo">Especificacoes</h1>
    <form action="#" method="post" class="especificacoes-form">
        <div class="especificacoes-lista">
         <?php
        if(isset($_SESSION['id_usuario'])){
           echo "<div class='especificacoes-lista-item'>";
           echo "<label class='especificacoes-lista-label'>A quanto tempo treina e quantos dias na semana você treina?</label>"; 
           echo "<input class='especificacoes-lista-input' type='text' placeholder='A quanto tempo treina e quantos dias na semana você treina?' disabled>";
           echo "</div>";

           echo "<div class='especificacoes-lista-item'>";
           echo "<label class='especificacoes-lista-label'>Qual meu foco:</label>";
           echo "<input class='especificacoes-lista-input' type='text' placeholder='Qual meu foco:' disabled>";
           echo "</div>";


           echo "<div class='especificacoes-lista-item'>";
           echo "<label class='especificacoes-lista-label'>Altura:</label>";
           echo "<input class='especificacoes-lista-input' type='text' placeholder='Altura:' disabled>";
           echo "</div>";

           echo "<div class='especificacoes-lista-item'>";
           echo "<label class='especificacoes-lista-label'>Peso:</label>";
           echo "<input class='especificacoes-lista-input' type='text' placeholder='Peso:' disabled>";
           echo "</div>";

           echo "<div class='especificacoes-lista-item'>";
           echo "<label class='especificacoes-lista-label'>Problemas de saude,se sim qual?</label>";
           echo "<input class='especificacoes-lista-input' type='text' placeholder='Problemas de saude,se sim qual?' disabled>";
           echo "</div>";

           echo "<div class='especificacoes-lista-item'>";
           echo "<label class='especificacoes-lista-label'>Possui ou teve lesões,se sim qual?</label>";
           echo "<input class='especificacoes-lista-input' type='text' placeholder='Possui ou teve lesões,se sim qual?' disabled>";
           echo "</div>";

           echo "<div class='especificacoes-lista-item'>";
           echo "<label class='especificacoes-lista-label'>Pratica ou praticou algum esporte,se sim qual?</label>";
           echo "<input class='especificacoes-lista-input' type='text' placeholder='Pratica ou praticou algum esporte,se sim qual?' disabled>";
           
            }; 
         ?> 
            <div class="especificacoes-lista-botoes">
                <button class="especificacoes-lista-editar" type="button">Editar</button>
                <button class="especificacoes-lista-salvar" type="submit">Salvar</button>
            </div>
        </div>
    </form>
</section>
