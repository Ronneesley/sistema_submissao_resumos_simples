<?php

$conn = new mysqli("localhost", "root", "", "evento");

$id = $_GET['id'];

if (is_numeric($id)) {
    $sql = "DELETE FROM organizadores WHERE id = ?";
    $result = $conn->prepare($sql);
    $result->bind_param("i", $id);

    if ($result->execute()) {
        if ($result->affected_rows > 0) {
            echo "Organizador excluído com sucesso.";
        } else {
            echo "Nenhum organizador encontrado com o ID fornecido.";
        }
    }
    $result->close();
}
$conn->close();
?>
