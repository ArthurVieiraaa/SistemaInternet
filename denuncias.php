<?php
    $title = "PAINEL DE DENÚNCIAS";
    include "includes/header.php";
    include "includes/conexao.php";

    session_start();
    if((!isset($_SESSION['Usuario']) == true) && (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['Usuario']);
        unset($_SESSION['senha']);
    }
    $logado = $_SESSION['Usuario'];
?>

<?php
    include "includes/navbar.php";
?>

<div class="denuncia">
    <div class="denuncia-container">
        <div class="denuncia-header">
            <h1>PAINEL DE DENÚNCIAS</h1>
        </div>
        <div class="denuncia-form">
            <form id="form">
                <h1>O que você deseja denunciar?</h1>
                <input type="text" id="titulo" name="titulo" placeholder="Digite o Ocorrido..." required>
                <h1>Em qual periodo ocorreu?</h1>
                <input type="text" id="data" name="data" placeholder="Digite qual o periodo do ocorrido..." required>
                <h1>Descreva o ocorrido:</h1>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Descreva o Ocorrido..." required></textarea>
                <div class="checkbox">
                    <input type="checkbox" name="termos" id="">
                    <h1>Ao enviar sua reclamação, você concorda que as informações fornecidas são verdadeiras e que está ciente de nossos <span>termos de uso</span>.</h1>
                </div>
                <div class="btn-denuncia"><button type="submit">Enviar</button></div>
            </form>
        </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>