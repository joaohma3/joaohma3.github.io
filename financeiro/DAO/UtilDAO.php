<?php

    // Essa Classe possui a responsabilidade de monitorar o acesso na aplicação.
    // Identifica o usuário e libera o acesso, caso contrário, barra o acesso!

    class UtilDAO{
        // 1º Passo: Iniciar a Sessão do Usuário, vai permitir o acesso a aplicação!
        private static function IniciarSessao(){
            if(!isset($_SESSION)){
                session_start();
            }
        }

        // 2º Passo: Vamos identificar os dados necessários do Usuário para trabalhar a sessão!
        public static function CriarSessao($cod, $nome){
            // Chamada de recurso static da classe!
            self::IniciarSessao();

            $_SESSION['cod'] = $cod;
            $_SESSION['nome'] = $nome;
        }

        // 3º Passo: Essa function revela o nome do Usuário que esta sendo liberado o acesso!
        public static function NomeLogado(){
            self::IniciarSessao();

            return $_SESSION['nome'];
        }

        // 4º Passo: Essa function revela o ID do Usuário que esta sendo liberado o acesso!
        public static function UsuarioLogado(){
            // Esse return esta simulando o acesso do Usuário de ID1 do Banco de Dados.
            // return 1; 

            self::IniciarSessao();

            return $_SESSION['cod'];
        }

        // 5º Passo: Caso o Usuário saia da Aplicação, toda a Sessão é limpada!
        public static function Deslogar(){
            self::IniciarSessao();

            unset($_SESSION['cod']);
            unset($_SESSION['nome']);

            header('location: login.php');
            exit;
        }

        // 6º Passo: Essa function vai monitorar se todas as telas possui a Sessão de acesso, caso não, é redirecionado!
        public static function VerificarLogado(){
            self::IniciarSessao();

            if(!isset($_SESSION['cod']) || $_SESSION['cod'] == ''){
                header('location: login.php');
                exit;
            }
        }
    }