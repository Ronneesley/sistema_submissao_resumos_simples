<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Autor</title>
    <link rel="stylesheet" href="../../css/cadastro_evento.css">
</head>
<body>
    <header>
        <h1>Você é autor? Cadastre-se Abaixo</h1>
    </header>

    <div class="form">
        <form method="post"  action="inserir.php">
            <label>Nome</label><br />
            <input type="text" name="nome" />
            <br />
            <label>CPF</label><br />
            <input type="text" name="cpf" />
            <br />
            <label>E-mail</label><br />
            <input type="text" name="email" />
            <br />
            <label>Curso Inscrito:</label><br />
            <select name="curso">
            <?php
                $con = new mysqli("localhost", "root", "", "evento");
                $resultado = $con->query("select * from cursos order by nome");

                while ($linha = $resultado->fetch_object()){
                    $id = $linha->id;
                    $nome = $linha->nome;
                    echo "<option value='$id'>$nome</option>";
                }
                $con->close();
            ?>
            </select>
            <br />
            
            <label>Instituicao de Ensino</label><br />
            <input type="text" name="instituicao_ensino" />
            <br />
            <label>Senha</label><br />
            <input type="password" name="senha" />
            <br />
            <label>Confirmar Senha</label><br />
            <input type="password" name="confirmar_senha" />
            <br />
        
            <br />

            <input type="submit" value="Cadastrar" />
        </form>
    </div>
</body>
</html>

<?php include("../layout_inferior.php") ?>