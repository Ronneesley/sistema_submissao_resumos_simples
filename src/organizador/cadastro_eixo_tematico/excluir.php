<?php include_once '../verifica_sessao.php'; ?>
<?php

$conn = mysqli_connect("localhost", "root", "", "evento");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];


$query = "DELETE FROM eixos_tematicos WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    echo "Deletado com sucesso";
} else {
    echo "error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>