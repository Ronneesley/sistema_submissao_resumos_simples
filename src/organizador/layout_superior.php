<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SSRS - Sistema de Submissão de Resumos Simples</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                min-height: 100vh;
                margin: 0;
            }
            .sidebar {
                width: 200px;
                background-color: #333;
                color: #fff;
                padding: 20px;
                box-sizing: border-box;
            }
            .sidebar a {
                color: #fff;
                text-decoration: none;
                display: block;
                padding: 10px 0;
                margin: 5px 0;
            }
            .sidebar a:hover {
                background-color: #575757;
            }
            .main-content {
                flex: 1;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .title {
                font-size: 24px;
                margin-bottom: 20px;
            }
            .shortcuts {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
            }
            .shortcut {
                background-color: #f1f1f1;
                width: 150px;
                height: 150px;
                border-radius: 10px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-decoration: none;
                color: #333;
            }
            .shortcut:hover {
                background-color: #ddd;
            }
            .shortcut img {
                width: 50px;
                height: 50px;
                margin-bottom: 10px;
            }
        </style>

        <link rel="stylesheet" href="../../css/listagem.css" />
    </head>
    <body>
        <div class="sidebar">
            <h2>Menu</h2>
            <a href="../dashboard">Dashboard</a>

            <a href="../cadastro_autor">Cadastro de Autores</a>
            <a href="../cadastro_avaliador">Cadastro de Avaliadores</a>
            <a href="../cadastro_curso">Cadastro de Curso</a>
            <a href="../cadastro_resumo">Cadastro de Resumos</a>
        </div>

        <div class="main-content">
            <div class="title">SSRS - Sistema de Submissão de Resumos Simples</div>
        