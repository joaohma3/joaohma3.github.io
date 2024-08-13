<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once "_head.php";
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
                    <h2>Nova Conta</h2>
                    <h5>Aqui você poderá alterar suas contas</h5>
                </div>
            </div>
            <hr />
            <div class="form-group">
                <label>Nome do Banco *</label>
                <input class="form-control" placeholder="Digite aqui o nome do seu banco...."/>
            </div>
            <div class="form-group">
            <label>Agência</label>
            <input type="number" class="form-control" placeholder="Digite aqui a agência..."/>
            </div>
            <div class="form-group">
                <label>Número da conta *</label>
                <input type="number" class="form-control" placeholder="Digite aqui o número da sua conta..."/>
            </div>
            <div class="form-group">
                <label>Saldo *</label>
                <input type="number" class="form-control" placeholder="Digite aqui o valor do saldo..."/>
            </div>
        <button type="submit" class="btn btn-success">Gravar</button>
        <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
</body>