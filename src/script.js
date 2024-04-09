
document.addEventListener('DOMContentLoaded', function () {
    const trabalhosLista = document.getElementById('trabalhos-lista');

    const trabalhos = [
      { id: 1, titulo: 'Trabalho 1', autor: 'Autor 1' },
      { id: 2, titulo: 'Trabalho 2', autor: 'Autor 2' },
      { id: 3, titulo: 'Trabalho 3', autor: 'Autor 3' },
    ];
  
    trabalhos.forEach(trabalho => {
      const li = document.createElement('li');
      li.textContent = `${trabalho.titulo} - ${trabalho.autor}`;
      li.addEventListener('click', () => {
        alert(`ID do trabalho: ${trabalho.id}`);
      });
      trabalhosLista.appendChild(li);
    });
  });