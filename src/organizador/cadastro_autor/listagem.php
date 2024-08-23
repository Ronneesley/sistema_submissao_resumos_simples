<?php include("../layout_superior.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de autores</title>
    <link rel="stylesheet" href="../../css/listagem_autor.css">
</head>
<body>
<?php

$con = new mysqli("localhost", "root", "", "evento");
$resultado = $con->query("select * from autores order by nome");

?>
    <div class="inicio">
        <aside class="corpo">
            <img src="logo.png" alt="Logo SSR">
            <nav>
                <a href="#">Home</a>
                <a href="#">Agenda</a>
                <a href="#">Relatórios</a>
                <a href="#">Configurações</a>
            </nav>
        </aside>
        <div class="user">
            <div class="header">
                <h1>Usuários</h1>
            </div>
            <div class="filtro">
                <input type="text" placeholder="CPF / Username">
                <input type="text" placeholder="Nº Trabalhos">
                <input type="text" placeholder="Status">
                <button>Pesquisar</button>
                <a href="cadastro.php">Incluir</a>
            </div>
            <div class="result">
                <table>
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome de Usuário</th>
                        <th>Email</th>
                        <th>Nº de Trabalhos</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($linha = $resultado->fetch_object()){
                    ?>
                    <tr>
                        <td><?=$linha->cpf?></td>
                        <td><?=$linha->nome?></td>
                        <td><?=$linha->email?></td>
                        <td>158</td>
                        <td><span style="color: lime;">●</span></td>  
                        <td class="opcao">
                            <button>⚙️</button>
                            <button>✏️</button>
                            <button>🗑️</button>
                            <button>👁️</button>
                        </tD>
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