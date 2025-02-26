<?php

    // ===== Requisição de Sessão Criada! =====
    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    // == Final da Requisição de Sessão Criada! ==

    require_once './DAO/MovimentoDAO.php';

    $tipoMov = '';

    if(isset($_POST['btnPesquisar'])){
        $tipoMov = $_POST['tipoMov'];
        $dtInicio = $_POST['dtInicio'];
        $dtFinal = $_POST['dtFinal'];

        $objDAO = new MovimentoDAO();

        // Foi alterado de RET para MOVS pois agora, essa Variável recebe a Consulta do PDO com os dados da Tabela Movimento!
        $movs = $objDAO->ConsultarMovimento($tipoMov, $dtInicio, $dtFinal);
    }else if(isset($_POST['btnExcluir'])){
        $idMov = $_POST['idMov'];
        $idConta = $_POST['idConta'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];

        $objDAO = new MovimentoDAO();
        $ret = $objDAO->ExcluirMovimento($idMov, $idConta, $tipo, $valor);
    }

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
                        <h2>Consultar Movimentações Financeiras.</h2>
                        <h5>Aqui você pode consultar todas as suas Movimentações Financeiras realizadas.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>

                <hr>

                <form action="consultar_movimento.php" method="POST">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione o Tipo de Movimento:</label>
                            <select class="form-control" name="tipoMov" id="tipoMov">
                                <option value="">Selecione</option>
                                <option value="0" <?= $tipoMov == 0 ? 'selected' : '' ?>>Todos</option>
                                <option value="1" <?= $tipoMov == 1 ? 'selected' : '' ?>>Entrada</option>
                                <option value="2" <?= $tipoMov == 2 ? 'selected' : '' ?>>Saída</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione uma Data de Início:</label>
                            <input type="date" class="form-control" name="dtInicio" id="dtInicio" value="<?= isset($dtInicio) ? $dtInicio : '' ?>"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione uma Data Final:</label>
                            <input type="date" class="form-control" name="dtFinal" id="dtFinal" value="<?= isset($dtFinal) ? $dtFinal : '' ?>"/>
                        </div>
                    </div>

                    <div class="alignBtn">
                        <button type="submit" class="btn btn-primary" name="btnPesquisar" onclick="return ValidarConsultaMovimento();">Pesquisar</button>
                    </div>
                </form>

                <?php if(isset($movs)): ?>
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span>Resultados da consulta realizada:</span>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tipo do Movimento</th>
                                            <th>Data</th>
                                            <th>Valor (R$)</th>
                                            <th>Categoria</th>
                                            <th>Empresa</th>
                                            <th>Conta</th>
                                            <th>Observação</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $total = 0;
                                        
                                        for($i=0; $i < count($movs); $i++){
                                            if($movs[$i]['tipo_movimento'] == 1){
                                                $total = $total + $movs[$i]['valor_movimento'];
                                            }else{
                                                $total = $total - $movs[$i]['valor_movimento'];
                                            }
                                        ?>
                                            <tr>
                                                <td><?= $movs[$i]['tipo_movimento'] == 1 ? '<strong style="color: #006400;">Entrada</strong>' : '<strong style="color: #ff0000;">Saída</strong>' ?></td>
                                                <td><?= $movs[$i]['data_movimento'] ?></td>
                                                <td>R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                <td><?= $movs[$i]['nome_categoria'] ?></td>
                                                <td><?= $movs[$i]['nome_empresa'] ?></td>
                                                <td><?= $movs[$i]['banco_conta'] ?></td>
                                                <td><?= $movs[$i]['obs_movimento'] ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?= $i ?>">Excluir</a>
                                                    <form action="consultar_movimento.php" method="POST">
                                                        <input type="hidden" name="idMov" value="<?= $movs[$i]['id_movimento'] ?>">
                                                        <input type="hidden" name="idConta" value="<?= $movs[$i]['id_conta'] ?>">
                                                        <input type="hidden" name="tipo" value="<?= $movs[$i]['tipo_movimento'] ?>">
                                                        <input type="hidden" name="valor" value="<?= $movs[$i]['valor_movimento'] ?>">

                                                        <div class="modal fade" id="myModal<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Deseja Realmente EXCLUIR esse Movimento Financeiro?</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <span>Tipo do Movimento: </span><strong><?= $movs[$i]['tipo_movimento'] == 1 ? '<strong style="color: #006400;">Entrada</strong>' : '<strong style="color: #ff0000;">Saída</strong>' ?>.</strong>
                                                                        <br>
                                                                        <span>Data do Movimento: </span><strong><?= $movs[$i]['data_movimento'] ?>.</strong>
                                                                        <br>
                                                                        <span>Valor do Movimento: </span><strong>R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?>.</strong>
                                                                        <br>
                                                                        <span>Categoria: </span><strong><?= $movs[$i]['nome_categoria'] ?>.</strong>
                                                                        <br>
                                                                        <span>Empresa: </span><strong><?= $movs[$i]['nome_empresa'] ?>.</strong>
                                                                        <br>
                                                                        <span>Conta Bancária: </span><strong><?= $movs[$i]['banco_conta'] ?>.</strong>
                                                                        <br>
                                                                        <span>Observação (Opcional): </span><strong><?= $movs[$i]['obs_movimento'] ?>.</strong>
                                                                        <br>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" class="btn btn-danger" name="btnExcluir">Excluir</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div style="text-align: center;">
                                    <strong>Total:</strong>
                                    <span style="color: <?= $total < 0 ? '#ff0000' : '#006400'; ?>">
                                        <strong>R$ <?= number_format($total, 2, ',', '.') ?></strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>