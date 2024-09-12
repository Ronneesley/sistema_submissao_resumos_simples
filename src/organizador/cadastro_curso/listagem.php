<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>

<?php
$con = new mysqli("localhost", "root", "", "evento");


$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : '';

$sql = "SELECT * FROM cursos WHERE nome LIKE ? ORDER BY nome";
$stmt = $con->prepare($sql);
$likeFiltro = '%' . $filtro . '%';
$stmt->bind_param('s', $likeFiltro);
$stmt->execute();
$resultado = $stmt->get_result();
?>
<link rel="stylesheet" href="../../css/listagem_curso.css" />

<h2>Listagem de Cursos</h2>

<div class="filtro">
<a href="./cadastro.php">Novo</a>
    <form method="get" action="">
        <input type="text" name="filtro" placeholder="Pesquisar" value="<?= htmlspecialchars($filtro) ?>" required autocomplete="off">
        <input type="submit" value="Pesquisar">
    </form>
   
    <div id="curso-lista"></div>
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
        while ($linha = $resultado->fetch_object()) {
        ?>
            <tr>
                <td><?= htmlspecialchars($linha->nome) ?></td>
                <td>
                    <a href="excluir.php?id=<?= $linha->id ?>">
                        <img src="https://cdn-icons-png.flaticon.com/512/18/18297.png" alt="deletar" width="20" height="20">
                    </a>
                    <a href="editar.php?id=<?= $linha->id ?>">
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
$stmt->close();
$con->close();
?>

<?php include("../layout_inferior.php") ?>
