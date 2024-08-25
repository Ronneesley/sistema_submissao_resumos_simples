<?php

require 'cadastrar.bd.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nome = filter_input(INPUT_POST, 'nome');
    $descricao = filter_input(INPUT_POST, 'descricao');

    
    if (!empty($nome) && !empty($descricao)) {
        try {
            
            $stmt = $pdo->prepare("INSERT INTO eixos_tematicos (nome, descricao) VALUES (:nome, :descricao)");

            
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':descricao', $descricao);

           
            $stmt->execute();

            
            echo "<p>Eixo temático inserido com sucesso!</p>";
        } catch (PDOException $e) {
            
            echo "<p>Erro ao inserir eixo temático: " . $e->getMessage() . "</p>";
        }
    } else {
       
        echo "<p>Por favor, preencha todos os campos.</p>";
    }
} else {
    
    header('Location: eixo_tematico.php');
    exit();
}
?>
