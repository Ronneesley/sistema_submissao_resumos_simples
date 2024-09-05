<?php

$nome = $_POST["nome"];
$curso = $_POST["curso"];
$formacao = $_POST["formacao"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$telefone= $_POST["telefone"];

$hashSenha = md5($senha);

$con = new mysqli("localhost", "root", "", "evento");
$con->query("insert into avaliadores(nome, email, curso, formacao, senha, telefone) 
    values('$nome', '$email', $curso, '$formacao', '$hashSenha','$telefone')");



echo "Avaliador salvo com sucesso!";
$con->close();
?>