<?php
    session_start();
    $nome = $_SESSION["nome"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SSRS - Sistema de Submissão de Resumos Simples</title>

        <link rel="stylesheet" href="../../css/layout.css" />               
    </head>
    <body>
        <div class="sidebar">
            <h2>Menu</h2>
            <a href="../dashboard">Dashboard</a>

            <a href="../cadastro_autor">Cadastro de Autores</a>
            <a href="../cadastro_avaliador">Cadastro de Avaliadores</a>
            <a href="../cadastro_curso">Cadastro de Curso</a>
            <a href="../cadastro_resumo">Cadastro de Resumos</a>
            <a href="../logout.php">Sair</a>
        </div>
        
        <div class="main-content">
            <div class="title">SSRS - Sistema de Submissão de Resumos Simples</div>

            <?php
                echo $nome;
            ?>
        