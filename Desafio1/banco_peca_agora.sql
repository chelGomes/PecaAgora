CREATE TABLE funcionario (
 	id INTEGER PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    logradouro VARCHAR(255),
    cep VARCHAR(9),
    cidade VARCHAR(255),
    estado CHAR(2),
    numero VARCHAR(10),
    complemento VARCHAR(255),
    cargo_id VARCHAR(50)
);


CREATE TABLE cargo (
	 id INTEGER PRIMARY KEY,
     nome_cargo VARCHAR(255) NOT NULL
);



INSERT INTO funcionario VALUES
    ('1', 'michel', '11111111', 'rua sao paulo', '41177177', 'Juiz de Fora','MG', '414', 'casa','1');
	
INSERT INTO funcionario VALUES
    ('2', 'joao', '21111111', 'rua juiz de fora', '54147177', 'Juiz de Fora','MG', '455', 'casa','2');
	
INSERT INTO cargo VALUES
    ('1', 'gerente');
	
INSERT INTO cargo VALUES
    ('2', 'secretaria');
	
INSERT INTO cargo VALUES
    ('3', 'estagiario');	