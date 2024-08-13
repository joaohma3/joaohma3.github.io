<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once "_head.php";

?>

<body>
    <?php include_once "_topo.php";
    include_once "_menu.php";
    ?>
    <div id="wrapper">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Alterar Categoria</h2>
                        <h5>Aqui voce poderá alterar ou excluir suas categorias </h5>
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" placeholder="Digite uma nova categoria. Ex: conta de luz" />
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="submit" class="btn btn-danger">Excluir</button>
</body>

</html>