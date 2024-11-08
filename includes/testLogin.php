<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['Usuario']) && !empty($_POST['senha'])){

        include_once "conexao.php";
        $Usuario = $_POST['Usuario'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT * FROM usuario WHERE Usuario = '$Usuario' AND senha = '$senha'";

        $result = $conexao -> query($sql);

        if(mysqli_num_rows($result) < 1){
            unset ($_SESSION['Usuario']);
            unset ($_SESSION['senha']);
            header("Location: ../login.php");
        } else {
            $_SESSION['Usuario'] = $Usuario;
            $_SESSION['senha'] = $senha;
            header("Location: ../home.php");
        }
   

    } else {
        header("Location: ../index.php");
    }

?>