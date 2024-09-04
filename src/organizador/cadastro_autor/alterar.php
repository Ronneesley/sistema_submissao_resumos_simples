<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>

<?php

$id = $_POST["id"];
$curso = $_POST["curso"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$instituicao_ensino = $_POST["instituicao_ensino"];

$con = new mysqli("localhost", "root", "", "evento");
$con->query("update autores set nome = '$nome', email = '$email', cpf = '$cpf', curso = '$curso', instituicao_ensino = '$instituicao_ensino' where id = $id");

$con->close();

echo "Alterado com sucesso!";

?>

<?php include("../layout_inferior.php") ?>