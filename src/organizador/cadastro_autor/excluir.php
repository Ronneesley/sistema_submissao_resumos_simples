<?php include_once '../verifica_sessao.php'; ?>
<?php

$conn = new mysqli("localhost", "root", "", "evento");

$id = $_POST['id'];

if (is_numeric($id)) {
    $sql = "DELETE FROM autores WHERE id = ?";
    $result = $conn->prepare($sql);
    $result->bind_param("i", $id);

    if ($result->execute()) {
        if ($result->affected_rows > 0) {
            echo "Autor excluído com sucesso.";
        } else {
            echo "Nenhum autor encontrado com o ID fornecido.";
        }
    }
    $result->close();
}
$conn->close();
?>
