<?php

    // ===== Requisição de Sessão Criada! =====
    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    // == Final da Requisição de Sessão Criada! ==

    require_once './DAO/CategoriaDAO.php';

    $objDAO = new CategoriaDAO();
    $categorias = $objDAO->ConsultarCategoria();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php
            include_once '_topo.php';
            include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Consultar Categorias Financeiras.</h2>
                        <h5>Aqui você pode consultar todas as suas Categorias Financeiras cadastradas.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr/>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Resultados da consulta realizada:</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome da Categoria</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0; $i < count($categorias); $i++){ ?>
                                        <tr>
                                            <td><?= $categorias[$i]['nome_categoria'] ?></td>
                                            <td><a href="alterar_categoria.php?cod=<?= $categorias[$i]['id_categoria'] ?>" class="btn btn-warning">Alterar</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>