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
        <li class="navegacao-menu-item navegacao-menu-item-sobre">
            <a href="#" class="navegacao-menu-link">Sobre</a>
        </li>
        <li class="navegacao-menu-item navegacao-menu-item-contato">
            <a href="#" class="navegacao-menu-link">Contato</a>
        </li>
    </ul>
    <div class="navegacao-botao" type="button"></div>
</nav>
