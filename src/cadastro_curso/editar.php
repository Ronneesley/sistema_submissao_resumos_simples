<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "evento");
$res = $con->query("select * from cursos where id = $id");

if ($linha = $res->fetch_object()){
    $nome = $linha->nome;
}

$con->close();

?>

<h1>Alteração de Curso</h1>

<form method="post"  action="alterar.php">
    <label>ID</label><br />
    <input type="text" name="id" value="<?=$id?>" />
    <br />

    <label>Nome</label><br />
    <input type="text" name="nome" value="<?=$nome?>" />
    <br /><br />

    <input type="submit" value="Alterar" />
</form>