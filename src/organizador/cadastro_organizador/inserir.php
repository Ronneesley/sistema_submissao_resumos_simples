<?php

$host = 'localhost'; 
$dbname = 'evento'; 
$username = 'root';  
$password = '';      


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? null;
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $data_cadastro = $_POST['data_cadastro'] ?? null;
    $email = $_POST['email'] ?? null;

    
    try {
        $sql = "INSERT INTO organizadores (nome, login, senha, data_cadastro, email) 
                VALUES (:nome, :login, :senha, :data_cadastro, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':login' => $login,
            ':senha' => password_hash($senha, PASSWORD_BCRYPT), 
            ':data_cadastro' => $data_cadastro,
            ':email' => $email
        ]);

        echo "Organizador inserido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao inserir organizador: " . $e->getMessage();
    }
} else {
    echo "Método inválido";
}
?>
