<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de organizadores</title>
    <link rel="stylesheet" href="../../css/listagem_autor.css">
</head>
<body>
<?php

$con = new mysqli("localhost", "root", "", "evento");
$resultado = $con->query("select * from organizadores order by nome");

?>
    <div class="inicio">
        <div class="user">
            <div class="header">
                <h1>Organizadores</h1>
            </div>
            <div class="filtro">
                <input type="text" placeholder="CPF / Username">
                <button>Pesquisar</button>
                <a href="cadastro.php">Incluir</a>
            </div>
            <div class="result">
                <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome de Usuário</th>
                        <th>Login</th>    
                        <th>Email</th> 
                        <th>Ações</th>                   
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($linha = $resultado->fetch_object()){
                    ?>
                    <tr>
                        <td><?=$linha->id?></td>
                        <td><?=$linha->nome?></td>
                        <td><?=$linha->login?></td>
                        <td><?=$linha->email?></td>
                    
                        <td class="opcao">
                            <button>⚙️</button>
                            <a href="editar.php?id=<?=$linha->id?>">✏️</a>
                            <button>🗑️</button>
                            <button>👁️</button>
                        </td>
                    </tr>
                    <?php
                            }
                        ?>
                </tbody>
                    <!-- Adicione mais linhas conforme necessário -->
                </table>
            </div>
            <div class="pagina">
                <button>Anterior</button>
                <div class="pages">
                    <span class="active">1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>5</span>
                    <span>...</span>
                    <span>15</span>
                </div>
                <button>Próximo</button>
            </div>
        </div>
    </div>
</body>
</html>

<?php include("../layout_inferior.php") ?>