<?php

$conn = new mysqli("localhost", "root", "", "evento");

$result = $conn->prepare('UPDATE resumos SET titulo = :titulo, palavras_chave = :palavras_chave, texto = :texto WHERE id = :id');
$result->execute(['titulo' => $titulo, 'palavras_chave' => $palavras_chave, 'texto' => $texto, 'id' => $id]);

$resumoId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($resumoId > 0) {
    $result = $conn->prepare('SELECT * FROM resumos WHERE id = :id');
    $result->execute(['id' => $resumoId]);
    $resumo = $result->fetch(mysqli::FETCH_ASSOC);
}
?>
