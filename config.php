<meta charset="utf-8">
<?php
$host = "containers-us-west-50.railway.app";
$user = "root";
$pass = "tn9DLLJhi2mXyIfmUdMu";
$banco = "railway";
$port = "6663";
$conexao = new mysqli($host,$user,$pass,$banco,$port);

if (mysqli_connect_errno()) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}
?>