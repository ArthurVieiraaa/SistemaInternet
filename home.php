<?php
    $title = "INFORMAÇÕES DO USUÁRIO";
    include "includes/header.php";
?>

<div class="home">
    <div class="home-navbar">
        <div class="home-navbar-content">
            <div class="logo">
                <a href="home.php"><i class="fa-solid fa-wifi"></i></a>
                <h1>Home</h1>
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
    <div class="home-content">
        <div class="home-text">
            <h1>FAÇA AQUI SUAS RECLAMAÇÕES DA INTERNET DO SENAC!</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="card-denuncia">
            <h1>Denuncia</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <div class="btn-denuncia"><a href="denuncias.php">Fazer Denuncia</a></div>
        </div>
        <div class="containers">
            <div class="card-info">
                <h1>Informação</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="btn-info"><a href="informacao.php">Ver Informações</a></div>
            </div>
            <div class="card-sugestao">
                <h1>Sugestão</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="btn-sugestao"><a href="sugestao.php">Dar Sugestão</a></div>
            </div>
        </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>