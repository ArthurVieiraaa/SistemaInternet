<?php
    $title = "REDEFINIR SENHA";
    include "includes/header.php";
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
                <h2>Nova Senha:</h2>
                <input type="password" name="senha" placeholder="Digite sua Nova Senha..." required>
                <h2>Confirme sua Senha:</h2>
                <input type="password" name="password" placeholder="Confirme sua Nova Senha..."  required>
                <div class="btn-senha"><button type="submit">Salvar</button></div>
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