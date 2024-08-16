
<?php include("../layout_superior.php") ?>

<?php

$con = new mysqli("localhost", "root", "", "evento");
$resultado = $con->query("select * from cursos order by nome");

?>

<h1>Listagem de Cursos</h1>

<input type="text" id="nome" placeholder="Pesquisar" required>

<div class="criar">
    <a href="./cadastro.php">Crie um novo Curso</a>
</div>


<table class="listagem">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($linha = $resultado->fetch_object()){
        ?>
                <tr>
                    <td><?=$linha->id?></td>
                    <td><?=$linha->nome?></td>
                    <td>
                        <a href="deletar.php?id=<?=$linha->id?>">Deletar</a>

                        <a href="editar.php?id=<?=$linha->id?>">Editar</a>                        
                    </td>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>

<?php
    $con->close();
?>

<?php include("../layout_inferior.php") ?>