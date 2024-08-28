<?php

$conn = new mysqli('localhost', 'root', '', 'evento');


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    
    $sql = "DELETE FROM eixos_tematicos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo "Eixo temático excluído com sucesso.";
    } else {
        echo "Erro ao excluir o eixo temático: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Nenhum ID fornecido para exclusão.";
}

$conn->close();
?>
