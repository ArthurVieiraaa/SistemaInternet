<?php 

$hostname = "localhost";
$database = "sistemareclamacao";
$username = "root";
$password = "";

$conexao = new mysqli($hostname, $username, $password, $database);

if($conexao->connect_errno){
    die("Conexão falhou: " . $conexao->connect_error);
}else {
   // echo "Conexão realizada com sucesso!";
}

?>