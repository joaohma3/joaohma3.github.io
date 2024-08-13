<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once "_head.php";
?>

<body>

    <?php
    include_once "_topo.php";
    include_once "_menu.php";
    ?>

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Nova Empresa</h2>
                    <h5>Aqui você poderá cadastrar as novas empresas</h5>
                </div>
            </div>
            <hr />
            <div class="form-group">
                <label>Nome da Empresa *</label>
                <input type="text" class="form-control" placeholder="Digite aqui o nome da empresa..." />
            </div>

            <div class="form-group">
                <label>telefone</label>
                <input type="number" class="form-control" placeholder="Digite aqui o telefone da empresa" />
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input class="form-control" placeholder="Digite aqui o endereço da empresa (opcional)" />
            </div>
            <button type="submit" class="btn btn-success">Gravar</button>
        </div>
    </div>
</body>