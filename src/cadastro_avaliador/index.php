<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Avaliador</title>
</head>
<body>
    <h1>Crie sua conta</h1>

    <form method="post" action="inserir.php">
        <label>Nome</label><br />
        <input type="text" name="nome" />
        <br />

        <label>E-mail</label><br />
        <input type="text" name="email" />
        <br />

        <label>Curso</label><br />
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

        <label>Formação</label><br />
        <input type="text" name="formacao" />
        <br />

        <label>Senha</label><br />
        <input type="password" name="senha" />
        <br />

        <label>Confirmação Senha</label><br />
        <input type="password" name="confirmacao_senha" />
        <br /><br />

        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>