-- Where: Filtro de Dados.
-- Inner Join: Busca de multiplos dados em multiplas Tabelas!

-- Filtro para Movimentos Financeiros do Tipo 1 (Entrada).
select * from tb_movimento where tipo_movimento = 1;

-- Filtro para Movimentos Financeiros do Tipo 2 (Saída).
select * from tb_movimento where tipo_movimento = 2;

select * from tb_movimento where tipo_movimento = 1;

select * from tb_movimento where tipo_movimento = 2;

select nome_usuario from tb_usuario where nome_usuario like '%a%';

select nome_usuario from tb_usuario where nome_usuario like '%d%';

select nome_usuario from tb_usuario where nome_usuario like '%b%';

select nome_usuario, nome_categoria, nome_empresa
	from tb_usuario
inner join tb_categoria
	on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_empresa
	on tb_empresa.id_usuario = tb_usuario.id_usuario;
    
select nome_categoria, nome_empresa
	from tb_empresa
inner join tb_categoria
	on tb_categoria.id_categoria = tb_empresa.id_empresa;
    
select nome_usuario, nome_categoria, nome_empresa
	from tb_usuario
inner join tb_categoria
	on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_empresa
	on tb_empresa.id_usuario = tb_usuario.id_usuario  where tb_usuario.id_usuario = 5;

select nome_usuario, nome_categoria, nome_empresa, saldo_conta, valor_movimento
	from tb_usuario
inner join tb_categoria
	on tb_categoria.id_usuario = tb_usuario.id_usuario
inner join tb_empresa
	on tb_empresa.id_usuario = tb_usuario.id_usuario
inner join tb_conta
	on tb_conta.id_usuario = tb_usuario.id_usuario
inner join tb_movimento
	on tb_movimento.id_usuario = tb_usuario.id_usuario;
    
SELECT nome_usuario, data_cadastro 
	FROM tb_usuario 
WHERE data_cadastro 
	BETWEEN '2023-01-01' AND '2023-10-11';
    
SELECT nome_usuario, 
		email_usuario, 
		senha_usuario, 
		data_cadastro, 
		nome_categoria, 
		nome_empresa,
        telefone_empresa,
        endereco_empresa,
        banco_conta,
        agencia_conta,
        numero_conta,
        saldo_conta,
        tipo_movimento,
        data_movimento,
        valor_movimento,
        obs_movimento
	FROM tb_usuario
INNER JOIN tb_categoria
	ON tb_categoria.id_usuario = tb_usuario.id_usuario
INNER JOIN tb_empresa
	ON tb_empresa.id_usuario = tb_usuario.id_usuario
INNER JOIN tb_conta
	ON tb_conta.id_usuario = tb_usuario.id_usuario
INNER JOIN tb_movimento
	ON tb_movimento.id_usuario = tb_usuario.id_usuario;
    
SELECT * FROM tb_usuario, tb_categoria, tb_empresa, tb_conta, tb_movimento;