<?php
    $title = "CADASTRO";
    include "includes/header.php";
    include "includes/conexao.php";

    if(isset($_POST['submit'])){
        $Usuario = $_POST['Usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        $result = mysqli_query($conexao, "INSERT INTO usuario (Usuario, senha, email) VALUES ('$Usuario', '$senha', '$email')");
    }
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
                <input type="text" name="Usuario" id="Usuario" placeholder="Digite seu Usuário..." required>
                <h2>Senha:</h2>
                <input type="password" name="senha" id="senha" placeholder="Digite sua Senha..." required>
                <h2>Confirme sua Senha:</h2>
                <input type="password" name="checkpassword" placeholder="Confirme sua Senha..." required>
                <h2>Email:</h2>
                <input type="text" name="email" id="email" placeholder="Digite seu Email..." required>
                <div class="btn-cadastro"><input type="submit" name="submit" id="button-cad"></div>
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