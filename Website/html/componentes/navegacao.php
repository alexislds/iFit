<nav class="navegacao aberta">
    <div class="navegacao-logo">
        <a href="./">iFit</a>
    </div>
    <ul class="navegacao-menu">
        <?php
            if(isset($_SESSION['id_usuario'])){
                echo "<li class='navegacao-menu-item navegacao-menu-item-logout'>";
                echo "<a href='./logout' class='navegacao-menu-link'>Logout</a>";
                echo "</li>";
            }
            else{
                echo "<li class='navegacao-menu-item navegacao-menu-item-conta'>";
                echo "<a href='./conta' class='navegacao-menu-link'>Conta</a>";
                echo "</li>";
            }
            
        ?>
    </ul>

   
    <div class="navegacao-botao" type="button"></div>
</nav>
   <?php
        if(isset($_SESSION['id_usuario'])){
            echo "<p class='navegacao-paragrafo'>Olá seja bem vindo,".$_SESSION['nome'].".</p>";
        }
    ?> 