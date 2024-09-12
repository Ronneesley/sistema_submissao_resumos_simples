<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>
<?php

$con = new mysqli("localhost", "root", "", "evento");
$resultado = $con->query("select * from cursos order by nome");

?>
<link rel="stylesheet" href="../../css/listagem_curso.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<h2>Listagem de Cursos</h2>

<div class="filtro">

    <input type="text" id="nome" placeholder="Pesquisar" required autocomplete="off">
    <a href="./cadastro.php">Novo</a>
    <div id="curso-lista"></div>
    <script>
        $(document).ready(function() {
            
            $("#nome").on("input", function() {
                var query = $(this).val();
                if (query.length > 1) {
                    $.ajax({
                        url: "buscar_cursos.php",
                        method: "POST",
                        data: { consulta: query },
                        success: function(data) {
                            $("#curso-lista").html(data);
                        }
                    });
                } else {
                    $("#curso-lista").html("");
                }
            });
        });
    </script>

   
   
</div>

<table class="listagem">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Opções</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($linha = $resultado->fetch_object()){
        ?>
                <tr>
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

