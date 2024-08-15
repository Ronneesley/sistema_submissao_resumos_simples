<?php include("../layout_superior.php") ?>

<?php

$nome = $_POST["nome"];

$con = new mysqli("localhost", "root", "", "evento");
$con->query("insert into cursos(nome) values('$nome')");

$con->close();

echo "Salvo com sucesso!";

?>

<?php include("../layout_inferior.php") ?>