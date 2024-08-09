// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('insercao-form');

    const updatePreview = () => {
        const titulo = form.titulo.value;
        const autores = form.autores.value;
        const introducao = form.introducao.value;
        const metodologia = form.metodologia.value;
        const resultados = form.resultados.value;
        const conclusao = form.conclusao.value;
        const dataSubmissao = form['data-submissao'].value;

        // Criar uma string com o resumo formatado
        const resumoFormatado = `
Título: ${titulo}
Autores: ${autores}

1. Introdução
${introducao}

2. Metodologia
${metodologia}

3. Resultados
${resultados}

4. Conclusão
${conclusao}

Data de Submissão: ${dataSubmissao}
`;

        // Atualizar o conteúdo da visualização
        document.getElementById('resumo-content').textContent = resumoFormatado;
    };

    // Atualizar a visualização em tempo real
    form.addEventListener('input', updatePreview);

    // Atualizar a visualização inicialmente
    updatePreview();

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        // Coletar dados do formulário
        const titulo = form.titulo.value;
        const autores = form.autores.value;
        const introducao = form.introducao.value;
        const metodologia = form.metodologia.value;
        const resultados = form.resultados.value;
        const conclusao = form.conclusao.value;
        const dataSubmissao = form['data-submissao'].value;

        // Criar uma string com o resumo formatado
        const resumoFormatado = `
Título: ${titulo}
Autores: ${autores}

1. Introdução
${introducao}

2. Metodologia
${metodologia}

3. Resultados
${resultados}

4. Conclusão
${conclusao}

Data de Submissão: ${dataSubmissao}
`;

        // Salvar o resumo no localStorage
        localStorage.setItem('resumoFormatado', resumoFormatado);

        // Redirecionar para a página de visualização
        window.location.href = 'visualizacao.html';
    });
});
