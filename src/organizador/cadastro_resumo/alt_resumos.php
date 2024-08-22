
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alteração de Resumos</title>
</head>
<body>
    <h1>Alterar Resumo</h1>

    <?php if (isset($resumo)): ?>
        <form action="alterar_resumos.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($resumo['id']); ?>">
            <label for="titulo">Título:</label><br>
            <input type="text" id="titulo" name="titulo" value="<?php echo htmlspecialchars($resumo['titulo']); ?>" required><br>
            <label for="palavras_chave">Palavras-chave:</label><br>
            <input type="text" id="palavras_chave" name="palavras_chave" value="<?php echo htmlspecialchars($resumo['palavras_chave']); ?>"><br>
            <label for="texto">Texto:</label><br>
            <textarea id="texto" name="texto" rows="10" cols="50" required><?php echo htmlspecialchars($resumo['texto']); ?></textarea><br>

            <input type="submit" value="Atualizar Artigo">
        </form>
</body>
</html>