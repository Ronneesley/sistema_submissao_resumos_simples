<?php include("../layout_superior.php") ?>

<?php

$con = new mysqli("localhost", "root", "", "evento");
$resultado = $con->query("select * from cursos order by nome");

?>
<link rel="stylesheet" href="../../css/listagem_curso.css" />

<h2>Listagem de Cursos</h2>

<div class="filtro">
    <input type="text" id="nome" placeholder="Pesquisar" required> 
    <a href="./cadastro.php">Novo</a>
</div>

<table class="listagem">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Opções</th>
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
                        <a href="excluir.php?id=<?=$linha->id?>">
                            <img src="https://cdn-icons-png.flaticon.com/512/18/18297.png" alt="deletar" width="20" height="20">
                        </a>

                        <a href="editar.php?id=<?=$linha->id?>">
                            <img src="https://cdn.icon-icons.com/icons2/3794/PNG/512/edit_drawing_draw_writing_write_pen_tool_icon_232789.png" alt="editar" width="20" height="20">
                        </a>                        
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