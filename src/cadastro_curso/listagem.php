<?php

$con = new mysqli("localhost", "root", "", "evento");
$resultado = $con->query("select * from cursos order by nome");

?>

<h1>Listagem de Cursos</h1>

<table border="1">
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