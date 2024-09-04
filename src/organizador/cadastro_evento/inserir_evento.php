<?php include_once '../verifica_sessao.php'; ?>
<?php

require 'inserir.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $local = $_POST['local'];
    $data_inicio = $_POST['data_realizacao_inicio'];
    $data_fim = $_POST['data_realizacao_fim'];
    $horario_inicio = $_POST['horario_inicio'];
    $horario_fim = $_POST['horario_fim'];
    $inscricao_inicio = $_POST['inscricao_inicio'];
    $inscricao_fim = $_POST['inscricao_fim'];
    $telefone = $_POST['telefone'];
    $correcao_trabalhos = $_POST['correcao_trabalhos'];
    $descricao = $_POST['descricao'];


    $bannerData = null;
    $videoData = null;

    if (isset($_FILES['banner']) && $_FILES['banner']['error'] === UPLOAD_ERR_OK) {
        $bannerData = file_get_contents($_FILES['banner']['tmp_name']);
    }

    if (isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK) {
        $videoData = file_get_contents($_FILES['video']['tmp_name']);
    }


    $sql = "INSERT INTO eventos (nome, banner, descricao, data_inicio, data_fim, periodo_inscricao_inicio, periodo_inscricao_fim, telefone, criado_em, local, video, horario_inicio, horario_fim, fim_correcao_trabalho) 
            VALUES (:nome, :banner, :descricao, :data_inicio, :data_fim, :inscricao_inicio, :inscricao_fim, :telefone, NOW(), :local, :video, :horario_inicio, :horario_fim, :correcao_trabalhos)";

    try {

        $stmt = $pdo->prepare($sql);


        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':banner', $bannerData, PDO::PARAM_LOB);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':data_inicio', $data_inicio);
        $stmt->bindParam(':data_fim', $data_fim);
        $stmt->bindParam(':inscricao_inicio', $inscricao_inicio);
        $stmt->bindParam(':inscricao_fim', $inscricao_fim);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':local', $local);
        $stmt->bindParam(':video', $videoData, PDO::PARAM_LOB);
        $stmt->bindParam(':horario_inicio', $horario_inicio);
        $stmt->bindParam(':horario_fim', $horario_fim);
        $stmt->bindParam(':correcao_trabalhos', $correcao_trabalhos);


        $stmt->execute();


        echo "<p>Evento inserido com sucesso!</p>";
    } catch (PDOException $e) {

        echo "<p>Erro ao inserir evento: " . $e->getMessage() . "</p>";
    }
} else {

    header('Location: cadastro.php');
}
