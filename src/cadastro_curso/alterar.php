<?php

$id = $_POST["id"];
$nome = $_POST["nome"];

$con = new mysqli("localhost", "root", "", "evento");
$con->query("update cursos set nome = '$nome' where id = $id");

$con->close();

echo "Alterado com sucesso!";

?>