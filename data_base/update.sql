-- CRUD (Create, Read, Update, Delete) - (Cadastrar, Pesquisar, Atualizar, Excluir).
-- Update: Atualizar.

UPDATE tb_usuario
	SET nome_usuario = 'João Paulo'
WHERE id_usuario = 2;

UPDATE tb_usuario
	SET email_usuario = 'joao_paulo@hotmail.com',
		senha_usuario = 'jop999'
WHERE id_usuario = 2;