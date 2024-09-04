<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>

<?php

$nome = $_POST["nome"];
$curso = $_POST["curso"];
$formacao = $_POST["formacao"];
$senha = $_POST["senha"];
$email = $_POST["email"];

$hashSenha = md5($senha);

$con = new mysqli("localhost", "root", "", "evento");
$con->query("insert into avaliadores(nome, email, curso, formacao, senha) 
    values('$nome', '$email', $curso, '$formacao', '$hashSenha')");

$con->close();

echo "Avaliador salvo com sucesso!";
?>

<?php include("../layout_inferior.php") ?>