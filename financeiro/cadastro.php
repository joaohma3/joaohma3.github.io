<?php

    require_once './DAO/UsuarioDAO.php';

    if(isset($_POST['btnCadastrar'])){
        $nomeUsuario = trim(($_POST['nomeUsuario']));
        $emailUsuario = trim(($_POST['emailUsuario']));
        $senha = trim(($_POST['senha']));
        $repSenha = trim(($_POST['repSenha']));

        $objDAO = new UsuarioDAO();
        $ret = $objDAO->CadastrarUsuario($nomeUsuario, $emailUsuario, $senha, $repSenha);
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br/>
                <br/>
                <h2>Cadastro de Conta.</h2>
                <h5>(Cadastre seus Dados de Acesso aqui).</h5>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <strong>Preencha todos os dados:</strong>
                    </div>
                    <div class="panel-body">
                        <?php include_once '_msg.php'; ?>
                        <br/>
                        <form action="cadastro.php" method="POST" role="form">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name="nomeUsuario" id="nomeUsuario" value="<?= isset($nomeUsuario) ? $nomeUsuario : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="emailUsuario" id="emailUsuario" value="<?= isset($emailUsuario) ? $emailUsuario : '' ?>"/>
                            </div>
                            <span style="font-size: 9px; padding-left: 4px; font-style: italic;">A SENHA deve conter entre 6 e 8 caracteres!</span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite sua Senha aqui..." name="senha" id="senha" value="<?= isset($senha) ? $senha : '' ?>"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite novamente sua Senha..." name="repSenha" id="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>"/>
                            </div>
                            <button class="btn btn-success" name="btnCadastrar" onclick="return ValidarCadastro();">Cadastrar</button>
                        </form> 
                        <hr/>
                        <span>Já possui uma Conta?</span> <a href="login.php">Clique aqui...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>