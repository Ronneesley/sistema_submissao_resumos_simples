<!DOCTYPE html>
<html>
<head>
    <title>Login de avaliador</title>

    <link rel="stylesheet" href="../css/login.css">

    <script src="../js/validacao_login.js"></script>
</head>
<body>
    <div class="login-form">
        <img src="SSR.png" alt="Logo">

        <h2>Login do Organizador</h2><br>

        <form method="post" action="logar.php" onsubmit="return validar();">
            <input type="text" id="email" name="email" placeholder="Email" required />
            <input type="password" id="senha" name="senha" placeholder="Senha" required />

            <p><a href="#">Esqueci minha senha</a></p>

            <button type="submit">ENTRAR</button>
        </form>
    </div>
</body>
</html>
