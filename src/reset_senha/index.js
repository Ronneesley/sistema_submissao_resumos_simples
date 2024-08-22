const codigo = document.getElementById("idcodigo"); 
const nova_senha = document.getElementById("idnova-senha"); 
const rep_nova_senha = document.getElementById("idrep-nova-senha"); 
const msg = document.getElementById('msg');

function redefinirSenha() {
    msg.innerHTML = '';

    if (codigo.value === "" || nova_senha.value === "" || rep_nova_senha.value === "") {
        alert("Preencha todos os campos");
    } else if (nova_senha.value !== rep_nova_senha.value) {
        alert("As senhas não coincidem");
    } else {
        const successDiv = document.createElement('div');
        successDiv.className = 'text-success';
        successDiv.textContent = 'Senha redefinida com sucesso';

        msg.appendChild(successDiv);

        codigo.value = '';
        nova_senha.value = '';
        rep_nova_senha.value = '';
    }
}
