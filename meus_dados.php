<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php
    include_once '_head.php';
    ?>
</head>

<body>
<?php
    include_once '_topo.php';
    include_once '_menu.php';
    ?>
    <div id="wrapper">
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Meus dados</h2>
                        <h5>Nessa página voce pode alterar seus dados. </h5>
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" placeholder="Digite seu nome" />
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" placeholder="Digite seu e-mail" />
                </div>
                <button type="submit" class="btn btn-success">Gravar</button>
            </div>
        </div>
    </div>
</body>
</html>