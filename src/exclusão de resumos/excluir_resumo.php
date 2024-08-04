<?php

$id = $_POST["id"];


$con = new mysqli("localhost", "root", "", "site");


if ($con->connect_error) {
    die("Conexão falhou: " . $con->connect_error);
}


$sql = "DELETE FROM resumos WHERE id='$id'";
if ($con->query($sql) === TRUE) {
    echo "Resumo excluído com sucesso!";
} else {
    echo "Erro ao excluir resumo: " . $con->error;
}


$con->close();
?>
