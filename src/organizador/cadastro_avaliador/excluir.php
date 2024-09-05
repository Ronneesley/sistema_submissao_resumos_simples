<?php include_once '../verifica_sessao.php'; ?>

<?php

$conn = new mysqli("localhost", "root", "", "evento");

// Verifica se o ID está definido e é um número
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $sql = "DELETE FROM avaliadores WHERE id = ?";
    $result = $conn->prepare($sql);
    $result->bind_param("i", $id);

    if ($result->execute()) {
        if ($result->affected_rows > 0) {
            header("Location: listagem.php?msg=success");
        } else {
            header("Location: listagem.php?msg=notfound");
        }
    } else {
        echo "Erro ao excluir avaliador: " . $result->error;
    }
    $result->close();
} else {
    echo "ID inválido.";
}

$conn->close();
?>
