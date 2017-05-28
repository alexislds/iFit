<section class="login-limite">
    <form action="logar.php" method="post">
        <div class="login">
            <h1 class="login-titulo">Login</h1>
            <input class="login-input login-email" name="loginEmail" type="text" placeholder="E-mail">
            <input class="login-input login-senha" name="loginSenha" type="password" placeholder="Senha">
            <p class="login-texto">Cadastrar</p>
            <button class="login-botao" type="submit"></button>
        </div>
    </form>
    <form action="cadastrar.php" method="post">
        <div class="cadastro esconde">
            <h1 class="cadastro-titulo">Cadastro</h1>
            <div class="cadastro-opcoes">
                <div class="cadastro-opcoes-aluno">
                    <input class="cadastro-opcoes-radio" type="radio" name="cadastroTipo" value="Aluno">
                    <p class="cadastro-opcoes-texto">Aluno</p>
                </div>
                <div class="cadastro-opcoes-professor">
                    <input class="cadastro-opcoes-radio" type="radio" name="cadastroTipo" value="Professor">
                    <p class="cadastro-opcoes-texto">Professor</p>
                </div>
            </div>
            <input class="cadastro-input cadastro-nome" name="cadastroNome" type="text" placeholder="Nome completo">
            <input class="cadastro-input cadastro-academia" name="cadastroAcademia" type="text" placeholder="Nome da academia">
            <input class="cadastro-input cadastro-idade" name="cadastroIdade" type="number" placeholder="Idade">
            <input class="cadastro-input cadastro-sexo" name="cadastroSexo" type="text" placeholder="Sexo">
            <input class="cadastro-input cadastro-email" name="cadastroEmail" type="email" placeholder="E-mail">
            <input class="cadastro-input cadastro-senha" name="cadastroSenha" type="password" placeholder="Senha">
            <p class="cadastro-texto">Logar</p>
            <button class="cadastro-botao" type="submit"></button>
        </div>
    </form>
</section>
