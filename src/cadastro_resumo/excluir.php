<?php include("../layout_superior.php") ?>

<?php

$id = $_POST["id"];

if (empty($id)) {
    die("ID não fornecido.");
}


$con = new mysqli("localhost", "root", "", "evento");


if ($con->connect_error) {
    die("Conexão falhou: " . $con->connect_error);
}


$id = $con->real_escape_string($id);


$sql = "DELETE FROM resumos WHERE id='$id'";


if ($con->query($sql) === TRUE) {
    echo "Resumo excluído com sucesso!";
} else {
    echo "Erro ao excluir resumo: " . $con->error;
}


$con->close();
?>

<?php include("../layout_inferior.php") ?>