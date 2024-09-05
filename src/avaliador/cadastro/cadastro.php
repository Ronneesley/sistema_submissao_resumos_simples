<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSRS - Sistema de Submissão de Resumos Simples</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="avaliador_cadastro.css">
    <form class="form" method="post" action="inserir.php">
</head>

<body>
    <div class="header">
        <h1>SSRS - Sistema de Submissão de Resumos Simples</h1>
    </div>

    <div class="content">
        <!-- Painel de Avaliadores -->
        <div class="login-panel">
            <h2>Painel de Avaliadores</h2>
            <h3>Olá, bem vindo de volta!</h3>
            <p>Acesse a sua conta agora mesmo!</p>
            <button class="login-button">LOGIN</button>
        </div>

        <!-- Formulário de Cadastro -->
        <div class="signup-form">
            <h2>Ainda não tem um cadastro?</h2>
            <h3>Cadastre-se agora mesmo!</h3>
            <form action="cadastro.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label>Telefone</label><br />
                <input type="text" name="telefone" />
                <br />

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <label for="confirmar_senha">Confirme a Senha:</label>
                <input type="password" id="confirmar_senha" name="confirmar_senha" required>

                <label for="curso">Curso:</label>
                <select id="curso" name="curso" required>
                    <option value="">Selecione...
                        <?php

                        $con = new mysqli("localhost", "root", "", "evento");
                        $resultado = $con->query("select * from cursos order by nome");

                        while ($linha = $resultado->fetch_object()) {
                            $id = $linha->id;
                            $nome = $linha->nome;
                            echo "<option value='$id'>$nome</option>";
                        }

                        $con->close();

                        ?>
                    </option>

                </select>
                </select>

                <label for="formacao">Formação:</label>
                <input type="text" id="formacao" name="formacao" required>

                <button type="submit" class="signup-button">Vamos lá</button>
            </form>
        </div>
    </div>
</body>

</html>