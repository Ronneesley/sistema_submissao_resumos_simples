<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-form {
            width: 300px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #00000033;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #cccccc;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #030425;
            color: #ffffff;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .login-form img {
            width: 150px; 
            margin-bottom: 20px;
        }
        .login-form p {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px; 
        }
        a{
            text-decoration: none;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <img src="SSR.png" alt="Logo">
        <h2>Pagina do Autor</h2><br>
        <input type="text" id="email" placeholder="Email" required>
        <input type="password" id="senha" placeholder="Senha" required>
        <p><a href="#">Esqueci minha senha</a></p>
        <button type="submit" onClick='entrar()'>ENTRAR</button>
        <button type="submit" onClick='cadastrar()'>CADASTRAR</button>
    </div>

    <script src="./index.js"></script>
</body>
</html>
