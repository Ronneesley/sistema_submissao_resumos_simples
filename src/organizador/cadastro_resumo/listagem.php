<?php include("../layout_superior.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Resumos Enviados</title>
    
    <link rel="stylesheet" href="../../css/listagem_resumo.css">

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
    <div class="inicio">
        <div class="principal">
            <h1>Listagem de Resumos Enviados</h1>
            <button class="login-button">Log In</button>
        </div>
        
        <div class="filtrar">
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
        <div class="result">
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