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
                    <h2>Consultar movimento</h2>
                    <h5>Consulte todos os movimentos de determinado período</h5>
                </div>
            </div>
            <hr />
            <div class="form-group">
            <div class="col-md-12">
                <label>Tipo do Movimento *</label>
                <select class="form-control">
                    <option value="0">TODOS</option>
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>
            </div>
            </div>

            
            <div class="col-md-6">
            <div class="form-group">
                <label>Data Inicial *</label>
                <input type="date" class="form-control" placeholder="Coloque a data do movimento" />
            </div>
            </div>
            
                <div class="col-md-6">
                <div class="form-group">
                <label>Data Final *</label>
                <input type="date" class="form-control" placeholder="Coloque a data do movimento" />
            </div>
            </div>
            
            <center>
            <button class="btn btn-info">Pesquisar</button>
            </center>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Resultado encontado
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Tipo</th>
                                            <th>Categoria</th>
                                            <th>Empresa</th>
                                            <th>Conta</th>
                                            <th>Valor</th>
                                            <th>Observação</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>(nome)</td>
                                            <td>(tipo)</td>
                                            <td>(categoria))</td>
                                            <td>(empresa)</td>
                                            <td>(conta)</td>
                                            <td>(valor)</td>
                                            <td>(obs)</td>
                                            <td>
                                            <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>