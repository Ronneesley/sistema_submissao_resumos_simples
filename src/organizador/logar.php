<?php
$con = new mysqli("localhost", "root", "", "evento");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "select * from organizadores where email = '$email' and senha = '$senha'";
$resultado = $con->query($sql);

if ($linha = $resultado->fetch_object()) {
    session_start();
    $_SESSION["id"] = $linha->id;
    $_SESSION["nome"] = $linha->nome;

    header("Location: dashboard/dashboard.php");
} else {
    echo "Usuário ou senha inválidos";
}

$resultado->close();
$con->close();
?>