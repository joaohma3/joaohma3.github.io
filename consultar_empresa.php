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
                    <h2>Consultar empresas</h2>
                    <h5>Consulte todas suas empresas</h5>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        Empresas cadastradas, caso deseje alterar, clique no botão
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome da empresa</th>
                                            <th>Telefone</th>
                                            <th>Endereço</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>(nome)</td>
                                            <td>(tel)</td>
                                            <td>(endereço)</td>
                                            <td>(acao)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="alterar_empresa.php" class="btn btn-warning btn-sm">Alterar</a>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>