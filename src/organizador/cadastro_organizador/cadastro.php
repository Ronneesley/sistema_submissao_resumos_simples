<?php include_once '../verifica_sessao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inserir Organizador</title>
    <link rel="stylesheet" href="../../css/cadastro_organizador.css">
</head>
<body>
    <h1>Adicionar Organizador</h1>
    
        <form  method="post" action="inserir.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"><br><br>
        
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required><br><br>
        
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>
        
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" id="data_cadastro" name="data_cadastro"><br><br>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
        
            <input type="submit" value="Cadastrar">
    </form>
    
    
</body>
</html>


