<?php

    // ===== Requisição de Sessão Criada! =====
    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    // == Final da Requisição de Sessão Criada! ==

    require_once './DAO/UsuarioDAO.php';

    // Objeto Global pois sera carregado os dados imediatamente assim que a tela for aberta!
    $objDAO = new UsuarioDAO();

    if(isset($_POST['btnSalvar'])){
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        $ret = $objDAO->GravarMeusDados($nome, $email, $senha);
    }

    // Uma Variável que recebe um Array, passa ser também um Array.
    // O Array recebido foi gerado pela consulta do PDO na Camada Back-End.
    $dados = $objDAO->CarregarMeusDados();

    // echo '<pre>';
    // var_dump($dados);
    // echo '</pre>';

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
                        <h2>Alterar Dados de Acesso.</h2>
                        <h5>Aqui você pode alterar seus dados de acesso cadastrado.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr/>
                <form action="meus_dados.php" method="POST">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Altere seu Nome:</label>
                            <input class="form-control" placeholder="Altere seu Nome aqui..." name="nome" id="nome" value="<?= $dados[0]['nome_usuario'] ?>"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Altere seu E-mail:</label>
                            <input type="email" class="form-control" placeholder="Altere seu E-mail aqui..." name="email" id="email" value="<?= $dados[0]['email_usuario'] ?>"/>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Altere sua Senha:</label>
                            <div class="ajuste">
                                <input type="password" class="form-control" placeholder="Altere sua Senha aqui..." name="senha" id="senha" value="<?= $dados[0]['senha_usuario'] ?>"/>
                                <img src="./assets/img/img_senha.png" alt="Clique aqui para ver a Senha!" title="Clique aqui para ver a Senha!" id="cadeado" class="iconSenha">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarMeusDados();">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Código Javascript/JQuery para manipular a visualização da Senha! -->
    <script>
        $("#cadeado").mousedown(function(){
            $("#senha").attr("type", "text");
        });

        $("#cadeado").mouseup(function(){
            $("#senha").attr("type", "password");
        });
    </script>
</body>
</html>