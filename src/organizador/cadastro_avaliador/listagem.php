<?php include_once '../verifica_sessao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSRS - Sistema de Submissão de Resumos Simples</title>
    <link rel="stylesheet" href="../../ccs/listagem_avaliador.css">
</head>
<body>
    <header>
        <h1>SSRS - Sistema de Submissão de Resumos Simples</h1>
    </header>

    <section class="container">
        <h2>Listagem de Avaliadores</h2>

        <div class="search-container">
            <input type="text" placeholder="Pesquisar">
        </div>

        <div class="actions">
            <button class="btn-register">Cadastrar Avaliador</button>
        </div>

        <div class="reviewer-details">
            <h3>Carlos Eduardo</h3>
            <p>Nome: Carlos Eduardo dos Santos Lopes</p>
            <p>Email: carlos@gmail.com</p>
            <p>Idade: 20</p>
            <p>Trabalhos Avaliados: 15</p>
            <p>Telefone: 63 99999-9999</p>
        </div>

        <table>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            <tr>
                <td>2</td>
                <td>Jeová Igor</td>
                <td>
                    <button class="edit-btn">✏️</button>
                    <button class="delete-btn">🗑️</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob Charlton</td>
                <td>
                    <button class="edit-btn">✏️</button>
                    <button class="delete-btn">🗑️</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bill Gates</td>
                <td>
                    <button class="edit-btn">✏️</button>
                    <button class="delete-btn">🗑️</button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Lionel Messi</td>
                <td>
                    <button class="edit-btn">✏️</button>
                    <button class="delete-btn">🗑️</button>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Ronneesley</td>
                <td>
                    <button class="edit-btn">✏️</button>
                    <button class="delete-btn">🗑️</button>
                </td>
            </tr>
        </table>

        <div class="pagination">
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <span>...</span>
            <button>55</button>
        </div>
    </section>
</body>
</html>

