<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$curso = $_POST["curso"];
$instituicao_ensino = $_POST["instituicao_ensino"];
$senha = $_POST["senha"];
$confirmar_senha = $_POST["confirmar_senha"];


if($senha !== $confirmar_senha){
    echo "Verifique se o campo senha e confirmar senha estao iguais";
    return;
}

$hashSenha = md5($senha);

$con = new mysqli("localhost", "root", "", "evento");
$con->query("insert into autores(nome, cpf, email, curso, instituicao_ensino, senha) values('$nome', '$cpf', '$email', '$curso', '$instituicao_ensino', '$hashSenha')");

$con->close();

echo "Autor cadastrado com sucesso!";

?>