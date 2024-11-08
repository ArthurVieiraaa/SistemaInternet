<?php
    $title = "PAINEL DE DENÚNCIAS";
    include "includes/header.php";
    include "includes/conexao.php";

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

<div class="denuncia">
    <div class="denuncia-container">
        <div class="denuncia-header">
            <h1>PAINEL DE DENÚNCIAS</h1>
        </div>
        <div class="denuncia-form">
            <form action="">
                <h1>O que você deseja denunciar?</h1>
                <input type="text" name="titulo" placeholder="Digite o Ocorrido..." required>
                <h1>Em qual periodo ocorreu?</h1>
                <input type="date" name="data" required>
                <select name="" id="">
                    <option value="selecione">Selecione o Periodo</option>
                    <option value="manha">Periodo da Manha</option>
                    <option value="tarder">Periodo da Tarde</option>
                    <option value="noite">Periodo da Noite</option>
                </select>
                <h1>Descreva o ocorrido:</h1>
                <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descreva o Ocorrido..." required></textarea>
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