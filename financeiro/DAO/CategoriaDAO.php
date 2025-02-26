<?php

    require_once 'Conexao.php';
    require_once 'UtilDAO.php';

    class CategoriaDAO extends Conexao{
        public function CadastrarCategoria($nomeCat){
            if($nomeCat == ''){
                return 0;
            }else{
                // return 1;

                // 1º Passo: Cria a conexão direta através da herança, com a Classe de Conexao, para comunicar com o Banco de Dados!
                $conexao = parent::retornarConexao();

                // 2º Passo: Injet de Script SQL que sera executado pelo PHP via PDO!
                $comando_sql = 'INSERT INTO tb_categoria(nome_categoria, id_usuario) VALUE(?, ?)';

                // 3º Passo: Objeto para o consumo dos recursos do PDO na Classe!
                $sql = new PDOStatement();

                // 4º Passo: Prepara a execução do Script SQL no Banco de Dados.
                $sql = $conexao->prepare($comando_sql);

                // 5º Passo: Vamos realizar a identificação e validar os itens que vão ser cadastrados no Banco de Dados!
                $sql->bindValue(1, $nomeCat);
                $sql->bindValue(2, UtilDAO::UsuarioLogado());

                // 6º Passo: Vamos realizar a Tentativa de execução!
                try{
                    // try: Tenta executar o código da forma específicada!
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ConsultarCategoria(){
            $conexao = parent::retornarConexao();

            $comando_sql = 'SELECT id_categoria, nome_categoria FROM tb_categoria WHERE id_usuario = ?';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchAll();
        }

        // Revela todas as informações atribuidas no ID que foi chamado para alteração!
        public function DetalharCategoria($idCategoria){
            if($idCategoria == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'SELECT id_categoria, nome_categoria FROM tb_categoria WHERE id_categoria = ? AND id_usuario = ?';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $idCategoria);
                $sql->bindValue(2, UtilDAO::UsuarioLogado());

                $sql->setFetchMode(PDO::FETCH_ASSOC);

                $sql->execute();

                return $sql->fetchAll();
            }
        }

        public function AlterarCategoria($nomeCat, $idCategoria){
            if($nomeCat == '' || $idCategoria == ''){
                return 0;
            }else{
                // return 1;

                $conexao = parent::retornarConexao();

                $comando_sql = 'UPDATE tb_categoria SET nome_categoria = ? WHERE id_categoria = ? AND id_usuario = ?;';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $nomeCat);
                $sql->bindValue(2, $idCategoria);
                $sql->bindValue(3, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ExcluirCategoria($idCategoria){
            if($idCategoria == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'DELETE FROM tb_categoria WHERE id_categoria = ? AND id_usuario = ?';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $idCategoria);
                $sql->bindValue(2, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -4;
                }
            }
        }
    }