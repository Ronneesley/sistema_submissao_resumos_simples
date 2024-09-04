<?php include_once '../verifica_sessao.php'; ?>
<?php

$conn = new mysqli("localhost", "root", "", "evento");

$sql = "SELECT id, nome, email, senha, curso FROM avaliadores ORDER BY id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo str_pad("ID", 5) . str_pad("Nome", 45) . str_pad("Email", 45) . str_pad("Senha", 32) . str_pad("Curso", 45) . PHP_EOL;
    echo str_repeat("-", 105) . PHP_EOL;

    while($row = $result->fetch_assoc()) {
        echo str_pad($row["id"], 5);
        echo str_pad($row["nome"], 45);
        echo str_pad($row["email"], 45);
        echo str_pad($row["senha"], 32);
        echo str_pad($row["curso"], 45);
        echo PHP_EOL;
    }
} 
$conn->close();
?>
