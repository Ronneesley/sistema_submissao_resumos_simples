<?php include("../layout_superior.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Autor</title>
    <link rel="stylesheet" href="../../css/cadastro_evento.css">
</head>
<body>
<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "evento");
$res = $con->query("select * from autores where id = $id");

if ($linha = $res->fetch_object()){
    $nome = $linha->nome;
    $cpf = $linha->cpf;
    $email = $linha->email;
    $instituicao_ensino = $linha->instituicao_ensino;
    $curso = $linha->curso;
}

$con->close();

?>
    <header>
        <h1>Alterar informações do Autor</h1>
    </header>

    <div class="form">
        <form method="post"  action="alterar.php">
        <label>ID</label><br />
        <input type="text" name="id" value="<?=$id?>" />
        <br />
            <label>Nome</label><br />
            <input type="text" name="nome" value="<?=$nome?>" />
            <br />
            <label>CPF</label><br />
            <input type="text" name="cpf" value="<?=$cpf?>"/>
            <br />
            <label>E-mail</label><br />
            <input type="text" name="email" value="<?=$email?>"/>
            <br />
            <label>Curso Inscrito:</label><br />
            <select name="curso">
            <?php
                $con = new mysqli("localhost", "root", "", "evento");
                $resultado = $con->query("select * from cursos order by nome");

                while ($linha = $resultado->fetch_object()){
                    $id = $linha->id;
                    $nome = $linha->nome;

                    if($id == $curso){
                        echo "<option value='$id' selected>$nome</option>";
                    }else{
                        echo "<option value='$id'>$nome</option>";
                    }
                }


                $con->close();
            ?>
            </select>
            <br />
            
            <label>Instituicao de Ensino</label><br />
            <input type="text" name="instituicao_ensino" value="<?=$instituicao_ensino?>"/>
            <br />
            <br /><br />

            <input type="submit" value="Salvar" />
        </form>
    </div>
</body>
</html>

<?php include("../layout_inferior.php") ?>