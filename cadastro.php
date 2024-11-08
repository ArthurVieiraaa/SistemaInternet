<?php
    $title = "CADASTRO";
    include "includes/header.php";
?>

<div class="cadastro">
    <div class="cadastro-content">
        <div class="img-user">
            <div class="user-icon">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <div class="cadastro-form">
            <h1>CADASTRO</h1>
            <form action="" method="POST">
                <h2>Usuário:</h2>
                <input type="text" name="user" placeholder="Digite seu Usuário..." required>
                <h2>Senha:</h2>
                <input type="password" name="password" placeholder="Digite sua Senha..." required>
                <h2>Confirme sua Senha:</h2>
                <input type="password" name="checkpassword" placeholder="Confirme sua Senha..." required>
                <h2>Email:</h2>
                <input type="text" name="email" placeholder="Digite seu Email..." required>
                <div class="btn-cadastro"><button type="submit">Cadastrar-se</button></div>
                <div class="links">
                    <a href="login.php">Logar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>