<?php
    $title = "INFORMAÇÕES DO USUÁRIO";
    include "includes/conexao.php";
    include "includes/header.php";

    session_start();
    if((!isset($_SESSION['Usuario']) == true) && (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['Usuario']);
        unset($_SESSION['senha']);
        header("Location: login.php");
    }
    $logado = $_SESSION['Usuario'];
?>

<div class="info-usuario">
    <div class="info-usuario-navbar">
        <div class="info-usuario-navbar-content">
            <div class="logo">
                <a href="home.php"><i class="fa-solid fa-wifi"></i></a>
                <h1>Informações do Usuário</h1>
            </div>
            <div class="off-screen-menu">
                <ul>
                    <li>
                        <a href="home.php">Home</a>
                        <a href="sugestao.php">Sugestões</a>
                        <a href="informacao.php">Informações</a>
                        <a href="denuncias.php">Denuncias</a>
                    </li>
                </ul>
            </div>
            <div class="nav">
                <div class="ham-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="info-usuario-content">
        <div class="img-user">
            <div class="user-icon">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <div class="info-usuario-form">
            <form action="" method="POST">
                <h2>Usuário:</h2>
                <input type="text" name="user" placeholder="Alterar seu Usuário..." required>
                <h2>Email:</h2>
                <input type="text" name="email" placeholder="Alterar seu Email..."  required>
                <h2>Número:</h2>
                <input type="number" name="numero" placeholder="Alterar seu Número..."  required>
                <h2>Senha:</h2>
                <input type="password" name="senha" placeholder="Digite sua Senha..."  required>
                <div class="btn-salvar"><button type="submit">Salvar</button></div>
            </form>
        </div>
    </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>