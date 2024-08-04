<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Autor</title>
</head>
<body>
    <h1>Você é autor? Cadastre-se Abaixo</h1>

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

        
        <br /><br />

        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>