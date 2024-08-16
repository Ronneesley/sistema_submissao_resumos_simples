<?php include("../layout_superior.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Resumos Enviados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #4CAF50;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .login-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .filters {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }
        .filters input, .filters select, .filters button {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .filters button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .results {
            margin-top: 20px;
        }
        .results h2 {
            color: #333;
            font-size: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<?php
// query("select * from resumos");
$con = new mysqli("localhost", "root", "", "evento");
$query = "
    SELECT resumos.*, autores.nome AS autor_nome, avaliadores.nome AS avaliador_nome
    FROM resumos
    JOIN autores ON resumos.id = autores.id
    JOIN avaliadores ON resumos.id = avaliadores.id";

$resultado = $con->query($query);

?>
    <div class="container">
        <div class="header">
            <h1>Listagem de Resumos Enviados</h1>
            <button class="login-button">Log In</button>
        </div>
        <div class="filters">
            <input type="text" placeholder="Buscar por título">
            <input type="text" placeholder="Buscar por autor">
            <input type="text" placeholder="Buscar por avaliador">
            <select>
                <option value="">Filtrar Status</option>
                <option value="pendente">Pendente</option>
                <option value="enviado">Enviado</option>
                <option value="reprovado">Reprovado</option>
                <option value="aprovado">Aprovado</option>
            </select>
            <button>Buscar</button>
        </div>
        <div class="results">
            <h2>Resultado da Lista de Resumos a serem avaliados ou já avaliados</h2>
            <table>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Avaliador</th>
                    <th>Status</th>
                </tr>
                <?php
                    while ($linha = $resultado->fetch_object()){
                ?>
                <tr>
                    <td><?=$linha->titulo?></td>
                    <td><?=$linha->autor_nome?></td>
                    <td><?=$linha->avaliador_nome?></td>
                    <td>Pendente</td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>

<?php include("../layout_inferior.php") ?>