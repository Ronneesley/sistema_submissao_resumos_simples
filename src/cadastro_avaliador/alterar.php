<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$curso = $_POST["curso"];
$formacao = $_POST["formacao"];
$email = $_POST["email"];


$con = new mysqli("localhost", "root", "", "evento");

$result= $con->prepare("UPDATE avaliadores SET nome = ?, email = ?, curso = ?, formacao = ? WHERE id = ?");
$result->execute([$nome, $email, $curso, $formacao, $id]);


$result->close();
$con->close();

echo "Avaliador Alterado com Sucesso !";
?>

