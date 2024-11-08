<?php
    $title = "PAINEL DE INFORMAÇÕES";
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

<?php
    include "includes/navbar.php";
?>

<div class="info">
    <div class="info-header">
        <h1>INFORMAÇÕES</h1>
    </div>
    <div class="container-text">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="container-duvidas">
        <h1>Se restou alguma duvida faça aqui a pergunta desejada:</h1>
        <input type="text" placeholder="Escreva sua Duvida...">
        <div class="btn-duvida"><button>Enviar</button></div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>