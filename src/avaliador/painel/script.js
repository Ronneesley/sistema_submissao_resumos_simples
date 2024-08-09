
document.addEventListener('DOMContentLoaded', () => {
    const userButton = document.getElementById('userButton');
    userButton.addEventListener('click', () => {
        alert('Botão do usuário clicado!');
    });
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', () => {
        console.log('Pesquisa: ', searchInput.value);
    });
});