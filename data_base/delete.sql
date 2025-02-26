-- CRUD (Create, Read, Update, Delete) - (Cadastrar, Pesquisar, Atualizar, Excluir).
-- Delete: Excluir.

-- Exclui toda a Tabela do Banco de Dados.
DROP TABLE tb_exemplo;

-- Exclui todo o Banco de Dados.
DROP DATABASE db_exemplo;

DROP DATABASE db_financeiro_qua_15;

delete from tb_usuario where id_usuario = 1;

delete from tb_categoria where id_categoria = 1;

delete from tb_movimento where id_movimento in (1, 2, 3, 4);