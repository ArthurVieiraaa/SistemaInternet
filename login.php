<?php
    $title = "LOGIN";
    include "includes/header.php";
    include "includes/conexao.php";
?>

<div class="login">
    <div class="login-content">
        <div class="img-user">
            <div class="user-icon">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <div class="login-form">
            <h1>LOGIN</h1>
            <form action="includes/testLogin.php" method="POST">
                <h2>Usuário:</h2>
                <input type="text" name="Usuario" placeholder="Digite seu Usuário..." required>
                <h2>Senha:</h2>
                <input type="password" name="senha" placeholder="Digite sua Senha..."  required>
                <div class="btn-logar"><input type="submit" name="submit"></div>
                <div class="btn-links">
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
                <div class="links">
                    <a href="redSenha.php">Esqueceu sua senha?</a>
                    <a href="cadastro.php">Cadastrar-se</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>