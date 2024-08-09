<?php include("../layout_superior.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Curso</title>
</head>
<body>
    <h1>Cadastro de Curso</h1>

    <form method="post"  action="inserir.php">
        <label>Nome</label><br />
        <input type="text" name="nome" />
        <br /><br />

        <input type="submit" value="Salvar" />
    </form>
</body>
</html>

<?php include("../layout_inferior.php") ?>