<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar pagina do Avaliador</title>
</head>
<body>
<?php

$id = $_GET["id"];


$con = new mysqli("localhost", "root", "", "evento");
$res = $con->query("select * from avaliadores where id = $id");

if ($linha = $res->fetch_object()){
    $nome = $linha->nome;
    $formacao = $linha->formacao;
    $email = $linha->email;
    $curso = $linha->curso;
}


$con->close();

?>


    <h1>Atualizar Avaliador</h1>
    <form action="alterar.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required value="<?=$id?>"> <br><br>
       
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required  value="<?=$nome?>"><br><br>
       
        <label for="curso">Curso:</label>
        <select name="curso">
        <?php
            $con = new mysqli("localhost", "root", "", "evento");
            $resultado = $con->query("select * from cursos order by nome");

            while ($linha = $resultado->fetch_object()){
                $id = $linha->id;
                if($id==$curso){
                    $selecionado="selected";
                }else{
                    $selecionado="";
                }
                $nome = $linha->nome;
                echo "<option value='$id' $selecionado >$nome</option>";

            }

            $con->close();
        ?>
        </select>
       
        <label for="formacao">Formação:</label>
        <input type="text" id="formacao" name="formacao" required  value="<?=$formacao?>"><br><br>
       
       
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required  value="<?=$email?>"><br><br>
       
        <input type="submit" value="Atualizar Avaliador">
    </form>
</body>
</html>

<?php include("../layout_inferior.php") ?>