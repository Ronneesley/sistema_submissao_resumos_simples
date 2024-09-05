<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSRS - Sistema de Submissão de Resumos Simples</title>
    <link rel="stylesheet" href="../../css/listagem_avaliador.css">
    <script>
        function mostrarDetalhes(button, nome, email, formacao) {
            // Se já houver uma linha de detalhes, removê-la
            var existingDetailsRow = button.closest('tr').nextElementSibling;
            if (existingDetailsRow && existingDetailsRow.classList.contains('details-row')) {
                existingDetailsRow.remove();
                return;
            }

            // Cria uma nova linha para exibir os detalhes
            var newRow = document.createElement('tr');
            newRow.classList.add('details-row');
            var newCell = document.createElement('td');
            newCell.setAttribute('colspan', 3); // Ocupa as três colunas da tabela
            newCell.innerHTML = `
                <div class="reviewer-details">
                    <h3>${nome}</h3>
                    <p>Nome: ${nome}</p>
                    <p>Email: ${email}</p>
                    <p>Formação: ${formacao}</p>
                </div>
            `;
            newRow.appendChild(newCell);

            // Insere a nova linha logo abaixo da linha do botão clicado
            button.closest('tr').insertAdjacentElement('afterend', newRow);
        }
    </script>
</head>
<body>
<?php

$con = new mysqli("localhost", "root", "", "evento");
if ($con->connect_error) {
    die("Conexão falhou: " . $con->connect_error);
}

$resultado = $con->query("SELECT nome, email, formacao FROM avaliadores ORDER BY nome");

?>

    <section class="container">
        <h2 class="title">Listagem de Avaliadores</h2>

        <div class="search-container">
            <input type="text" placeholder="Pesquisar">
        </div>

        <div class="actions">
            <a class="btn-register" href="./cadastro.php">Cadastrar Avaliador</a>
        </div>

        <table>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            <?php
                $contador = 1;
                while ($linha = $resultado->fetch_object()){
                    // Pegando os valores do banco de dados
                    $nome = $linha->nome;
                    $email = $linha->email;
                    $formacao = $linha->formacao;
            ?>
            <tr>
                <td><?=$contador?></td>
                <td><?=$nome?></td>
                <td>
                    <!-- Passar os valores dinâmicos do banco de dados -->
                    <button class="details-btn" onclick="mostrarDetalhes(this, '<?=$nome?>', '<?=$email?>', '<?=$formacao?>')">👁️</button>
                    <button class="edit-btn">✏️</button>
                    <button class="delete-btn">🗑️</button>
                </td>
            </tr>
            <?php
                $contador++;
                }
            ?>
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
<?php include("../layout_inferior.php") ?>
