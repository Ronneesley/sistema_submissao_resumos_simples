<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$curso = $_POST["curso"];
$instituicao_ensino = $_POST["instituicao_ensino"];
$senha = $_POST["senha"];

$hashSenha = md5($senha);

$con = new mysqli("localhost", "root", "", "evento");
$con->query("insert into autores(nome, cpf, email, curso, instituicao_ensino, senha) values('$nome', '$cpf', '$email', '$curso', '$instituicao_ensino', '$hashSenha')");

$con->close();

echo "Autor salvo  cadastrado com sucesso!";

?>