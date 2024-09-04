<?php include("../layout_superior.php") ?>
<?php include_once '../verifica_sessao.php'; ?>

<link rel="stylesheet" href="../../css/cadastro_curso.css" />

<h1>Cadastro de Curso</h1>

<form method="post"  action="inserir.php">
    <div class="campo">
        <label>Nome</label>
        <input type="text" name="nome" /> 
    </div>
    <input type="submit" value="Salvar" />
</form>

<?php include("../layout_inferior.php") ?>