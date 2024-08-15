const email = document.getElementById('email');
const senha = document.getElementById('senha');

function entrar(e){
    // e.preventDefault();

    if (email.value === "" || senha.value === "") {
        alert("Preencha todos os campos");
    }else{
        alert("Bem-vindo!");
        window.location.href = "painel.php";
    }
}