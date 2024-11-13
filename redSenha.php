<?php
    $title = "REDEFINIR SENHA";
    include "includes/header.php";
    include "includes/conexao.php";

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $result = mysqli_query($conexao, "UPDATE usuario SET senha = '$senha' WHERE email = '$email'");
    }
?>

<div class="senha">
    <div class="senha-content">
        <div class="img-user">
            <div class="user-icon">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <div class="senha-form">
            <h1>SENHA</h1>
            <form action="" method="POST">
                <h2>Email:</h2>
                <input type="email" name="email" id="email" placeholder="Informe seu email..." required>
                <h2>Nova Senha:</h2>
                <input type="password" name="senha" id="senha" placeholder="Digite sua Nova Senha..." required>
                <h2>Confirme sua Senha:</h2>
                <input type="password" name="senha" id="senha" placeholder="Confirme sua Nova Senha..."  required>
                <div class="btn-senha"><input type="submit" name="submit"></div>
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