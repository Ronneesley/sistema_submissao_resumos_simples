<?php

$conn = new mysqli("localhost", "root", "", "evento");

$id = $_POST['id'];

if (is_numeric($id)) {
    $sql = "DELETE FROM avaliadores WHERE id = ?";
    $result = $conn->prepare($sql);
    $result->bind_param("i", $id);

    if ($result->execute()) {
        if ($result->affected_rows > 0) {
            echo "Avaliador excluído com sucesso.";
        } else {
            echo "Nenhum avaliador encontrado com o ID fornecido.";
        }
    } 
    $result->close();
}
$conn->close();
?>
