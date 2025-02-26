-- CRUD: Create | Read | Update | Delete.
-- Cadastro de Dados (Create).

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Ana Maria', 'ana_maria@hotmail.com', 'ana321', '2024-11-12');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Paulo Roberto', 'paulo.roberto@gmail.com', 'plo213', '2024-11-12');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Alisson Rocha', 'alissinho@hotmail.com', 'alissu321', '2024-11-01');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('João Neves', 'johnsnow@hotmail.com', 'snow456', '2024-11-02');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Harry Potter', 'hpotter@hotmail.com', 'potter3110', '2024-11-03');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Marcos Katchau', 'relampago@hotmail.com', 'katchau000', '2024-11-04');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Fiorentina Santos', 'filo@hotmail.com', 'fiosantos987', '2024-11-05');

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Faculdade', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Trabalho CLT', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Trabalho CLT', 2);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Internet', 2);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Farmácia', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Roupas', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Vendas', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Farmácia', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Roupas', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Vendas', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 5);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Farmácia', 5);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Roupas', 5);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Vendas', 5);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 6);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Farmácia', 6);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Roupas', 6);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Vendas', 6);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Farmácia', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Roupas', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Vendas', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('OLX', '5532320101', 'Rua Serra Formosa', 3);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Web Motors', '5534562301', 'Rua São Paulo', 3);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Burger King', '5530304040', 'Av. Higienópolis', 3);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Riachuelo', '553989-7788', 'Rod. Celso Garcia', 3);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('OLX', '5532320101', 'Rua Serra Formosa', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Mercado Livre', '5531310000', 'São Paulo Capital', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Mc Donalds', '553213-4411', 'Av. Tiradentes', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Farmácia Vale Verde', '5532322121', 'Av. JK', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Venda Pessoal', '5530001111' , 'Londres', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Sabor Caseiro', '5533334444', 'Av. Arthur Thomas', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('C&A', '5538794321', 'Rod. Celso Garcia', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('OLX', '5532320101', 'Rua Serra Formosa', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Big Dog Lanches', '5533472727', 'Rua Esperança', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Drogamais', '5531318888', 'Av. Tiradentes', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Filó Makes', '5530302020', 'Cinco Conjuntos, Rua 12', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Max Atacadista', '5530101515', 'Av.Tiradentes', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('ZUA', '5533775757', 'Rod. Celso Garcia', 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1111', '12345', 2500.00, 3);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco do Brasil', '2222', '23456', 0, 3);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco do Brasil', '2222', '891011', 1200.32 , 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Sicredi', '2424', '81234', 7000.00, 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Gringotes', '0011', '91234', 325500.00, 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('NuBank', '0212', '9900', 3712.30, 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('NuBank', '0212', '100102', 8700.00, 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1111', '10089', 0, 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('NuBank', '0212', '11321', 9809.00, 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Itaú', '0418', '11626', 1200.00, 7);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(1, '2024-11-19', 1600, null, 20, 11, 6, 5);


INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(1, '2024-11-19', 1600, null, 20, 50, 6, 5);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(2, '2024-11-19', 100, 'Comida', 17, 10, 6, 5);