<?php
    $title = "PAINEL DE SUGESTÕES";
    include "includes/header.php";
?>

<?php
    include "includes/navbar.php";
?>

<div class="sugestao">
    <div class="sugestao-container">
        <div class="sugestao-header">
            <h1>PAINEL DE SUGESTÕES</h1>
        </div>
        <div class="sugestao-form">
            <form action="">
                <h1>Qual sua sugestão para a internet?</h1>
                <input type="text" name="titulo" placeholder="Digite sua Sugestão..." required>
                <h1>Breve Resumo:</h1>
                <input type="text" name="data" placeholder="Digite um Breve Resumo..." required>
                <h1>Descreva:</h1>
                <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descreva sua Sugestão..." required></textarea>
                <div class="btn-sugestao"><button type="submit">Enviar</button></div>
            </form>
        </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>