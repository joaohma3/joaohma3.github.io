<?php

    // Essa Validação monitora a URL de TODAS as Telas da aplicação!
    // Caso na URL seja enviado a chave RET, o seu valor sera capturado!
    if(isset($_GET['ret'])){
        $ret = $_GET['ret'];
    }

    if(isset($ret)){
        switch($ret){
            case 1:
                echo '<div class="alert alert-success">Ação realizada com SUCESSO!</div>';
                break;

            case 0:
                echo '<div class="alert alert-warning">Preencha todos os campos OBRIGATÓRIOS!</div>';
                break;

            case -1:
                echo '<div class="alert alert-danger">Houve uma falha na operação. Tente novamente mais tarde!</div>';
                break;

            case -2:
                echo '<div class="alert alert-warning">A SENHA deve conter entre 6 e 8 caracteres!</div>';
                break;

            case -3:
                echo '<div class="alert alert-warning">AS SENHAS devem ser iguais!</div>';
                break;

            case -4:
                echo '<div class="alert alert-warning">Esse item esta em uso, não pode ser excluido!</div>';
                break;

            case -5:
                echo '<div class="alert alert-danger">Já existe um cadastro com este E-mail!</div>';
                break;

            case -6:
                echo '<div class="alert alert-danger">Cadastro inexistente. Nenhum Usuário foi encontrado!</div>';
                break;
        }
    }