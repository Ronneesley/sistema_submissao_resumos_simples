<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Evento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <img src="c:\Users\carlo\Downloads\imagem_2024-08-18_114247296.png" alt="Logotipo" class="logo">
        </header>

        <h1>Cadastro de Evento</h1>
        <form action="inserir_evento.php" method="post" enctype="multipart/form-data">
            <label for="nome">Nome do Evento:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="local">Local:</label>
            <input type="text" id="local" name="local" required>

            <label for="data_realizacao">Data da Realização:</label>
            <div class="data-horario">
                <div class="data">
                    <label for="data_realizacao_inicio">De</label>
                    <input type="date" id="data_realizacao_inicio" name="data_realizacao_inicio" required>
                </div>


                <div class="data">
                    <label for="data_realizacao_fim">Até</label>
                    <input type="date" id="data_realizacao_fim" name="data_realizacao_fim" required>
                </div>
            </div>


            <label for="horario">Horário:</label>
            <div class="horario-container">
                <div class="horario">
                    <label for="horario_inicio">De</label>
                    <input type="time" id="horario_inicio" name="horario_inicio" required>
                </div>
                <div class="horario">
                    <label for="horario_fim">Até</label>
                    <input type="time" id="horario_fim" name="horario_fim" required>
                </div>
            </div>


            <label for="inscricao_periodo">Período de Inscrição:</label>
            <div class="data-horario">
                <div class="data">
                    <label for="inscricao_inicio">De</label>
                    <input type="date" id="inscricao_inicio" name="inscricao_inicio" required>
                </div>
                <div class="data">
                    <label for="inscricao_fim">Até</label>
                    <input type="date" id="inscricao_fim" name="inscricao_fim" required>
                </div>
            </div>

            <label for="banner">Banner do Evento:</label>
            <input type="file" id="banner" name="banner" accept="image/*">

            <label for="video">Vídeo do Evento</label>
            <input type="file" id="video" name="video" accept="video/*">

            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" required>

            <label for="submissao_trabalhos">Data de Submissão de Trabalhos:</label>
            <div class="data-horario">
                <div class="data">
                    <label for="submissao_trabalhos_inicio">De</label>
                    <input type="date" id="submissao_trabalhos_inicio" name="submissao_trabalhos_inicio" required>
                </div>

                <div class="data">
                    <label for="submissao_trabalhos_fim">Até</label>
                    <input type="date" id="submissao_trabalhos_fim" name="submissao_trabalhos_fim" required>
                </div>
            </div>
            <label for="correcao_trabalhos">Fim da Correção dos Trabalhos:</label>
            <input type="date" id="correcao_trabalhos" name="correcao_trabalhos" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="5" required></textarea>

            <div class="button-group">
                <button type="submit">Cadastrar</button>
                <button type="reset">Cancelar</button>
            </div>
        </form>
    </div>
</body>

</html>