<?php include("../layout_superior.php") ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eixo Temático</title>
    <link rel="stylesheet" href="../../css/cadastro_evento.css">
</head>
<body>
    <div class="container">

        <header>
            <h1>Cadastro de Eixo Temático</h1>
        </header>

    
        <form method="post" action="cadastrar_eixo.php" enctype="multipart/form-data">
            <label for="nome">Nome do Eixo Temático:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="4" required></textarea>

            <div class="button-container">
                <button type="reset">Cancelar</button>
                <button type="submit">Salvar</button>                
            </div>
        </form>
    </div>
</body>
</html>

<?php include("../layout_inferior.php") ?>