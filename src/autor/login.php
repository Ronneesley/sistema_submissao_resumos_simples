<!DOCTYPE html>
<html>
<head>
    <title> Login de autor</title>

    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="login-form">
        <img src="SSR.png" alt="Logo">
        <h2>Login do Autor</h2><br>
        <input type="text" id="email" placeholder="Email" required>
        <input type="password" id="senha" placeholder="Senha" required>
        <p><a href="#">Esqueci minha senha</a></p>
        <button type="submit" onClick='entrar()'>ENTRAR</button>
        <button type="submit" onClick='cadastrar()'>CADASTRAR</button>
    </div>
    <script src="./index.js"></script>
</body>
</html>