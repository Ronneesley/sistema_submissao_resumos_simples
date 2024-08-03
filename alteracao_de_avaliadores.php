<?php

$nome = $_POST["nome"];
$curso = $_POST["curso"];
$formacao = $_POST["formacao"];
$senha = $_POST["senha"];
$email = $_POST["email"];

$con = new mysqli("localhost", "root", "", "evento");

$result= $con->prepare("UPDATE avaliadores SET nome = ?, email = ?, curso = ?, formacao = ?WHERE senha = ?");
 $result->execute([$nome, $email, $curso, $formacao, $senha]);

$result->close();
$con->close();

echo "Avaliador Alterado com Sucesso !";
?>