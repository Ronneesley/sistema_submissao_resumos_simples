<?php include("../layout_superior.php") ?>

<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "evento");
$con->query("delete from cursos where id = $id");

$con->close();

echo "Excluído com sucesso!";
?>

<?php include("../layout_inferior.php") ?>