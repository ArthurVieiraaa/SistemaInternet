<?php
    $title = "PAINEL DE RECLAMAÇÃO";
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

<div class="index">
    <div class="index-container">
        <div class="index-logo">
            <i class="fa-solid fa-wifi"></i>
        </div>
        <h1>Seu painel de reclamações anônimas!</h1>
        <div class="index-buttons">
            <a href="login.php">Logar</a>
            <a href="cadastro.php">Cadastrar-se</a>
        </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>