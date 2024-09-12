<?php

$host = "localhost";
$db = "evento";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

if (isset($_POST['consulta'])) {
    $consulta = $_POST['consulta'];

    $stmt = $conn->prepare("SELECT nome FROM cursos WHERE nome LIKE :consulta LIMIT 5");
    $stmt->execute(['consulta' => $consulta . '%']);

    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultados) > 0) {
        foreach ($resultados as $curso) {
            echo "<div class='filtro'>" . htmlspecialchars($curso['nome']) . "</div>";
        }
    } else {
        echo "<div class='filtro'>Nenhum curso encontrado</div>";
    }
}
?>
