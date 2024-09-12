<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizador - Painel</title>
    <link rel="stylesheet" href="">
   <style>
    

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
}
.shortcuts {
    display: flex;
}
.sidebar {
    background-color: #000;
    color: #fff;
    padding: 20px;
    width: 250px;
    height: 100vh;
}
.sidebar h2 {
    font-size: 22px;
    margin-bottom: 10px;
}
.sidebar p {
    font-size: 14px;
    margin-bottom: 30px;
}
.sidebar ul {
    list-style-type: none;
    margin-bottom: 30px;
}
.sidebar ul li {
    margin: 20px 0;
}
.sidebar ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}
.sidebar .sair-btn {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    width: 100%;
    cursor: pointer;
}
.sidebar p {
    margin-top: 50px;
    font-size: 14px;
    text-align: center;
}
.main-content {
    flex-grow: 1;
    padding: 20px;
    background-color: #f8f8f8;
}
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header h1 {
    font-size: 24px;
}
.user-info {
    display: flex;
    align-items: center;
}
.user-info p {
    margin-right: 10px;
    font-size: 16px;
}
.user-icon {
    font-size: 24px;
}
.content {
    margin-top: 30px;
}
.welcome-message {
    background-color: #e9e9e9;
    padding: 20px;
    font-size: 18px;
    border-radius: 5px;
    margin-bottom: 30px;
    text-align: center;
}
.card-grid {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}
.card {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    width: 200px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}
.card img {
    width: 60px;
    margin-bottom: 10px;
}
.card p {
    font-size: 16px;
    font-weight: bold;
}
   </style>
</head>
<body>
    <div class="container">
       
        <main class="main-content">
            <section class="content">
                <div class="welcome-message">
                    <p>Seja bem vindo, nós da SSRS esperamos que você tenha um bom proveito no site!</p>
                </div>
                <div class="card-grid">
                    <div class="card">
                        <img src="icon.png" alt="Gerenciar Autores">
                        <p>Gerenciar Autores</p>
                    </div>
                    <div class="card">
                        <img src="icon.png" alt="Gerenciar Avaliadores">
                        <p>Gerenciar Avaliadores</p>
                    </div>
                    <div class="card">
                        <img src="icon.png" alt="Gerenciar Resumos">
                        <p>Gerenciar Resumos</p>
                    </div>
                    <div class="card">
                        <img src="../../imagens/eixo_tematicopng.png" alt="Gerenciar Eixos Temáticos">
                        <p>Gerenciar Eixos Temáticos</p>
                    </div>
                    <div class="card">
                        <img src="../../imagens/evento.png" alt="Estatística">
                        <p>Cadastro de Eventos</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
