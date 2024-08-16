function validar(e){
    const email = document.getElementById('email');
    const senha = document.getElementById('senha');

    if (email.value === "" || senha.value === "") {
        alert("Preencha todos os campos");
        return false;
    }else{
        return true;
    }
}