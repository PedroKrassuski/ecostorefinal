drop database if exists ecostore;
create database ecostore;
use ecostore;

create table comprador(
	codComprador int NOT NULL AUTO_INCREMENT,
    nome varchar(25),
    loginC varchar(25),
    senha varchar(100),
    email VARCHAR(64),
    telefone VARCHAR(14),
    dataNasc date,
    cpf VARCHAR(25),
    primary key (codComprador)
)
ENGINE = InnoDB;

create table vendedor(
	codVendedor int NOT NULL AUTO_INCREMENT,
    nomeEmp varchar(50),
    loginV varchar(25),
    senha varchar(100),
    email VARCHAR(64),
    cnpj VARCHAR(25),
    telefone VARCHAR(14),
    descricao varchar(255),
    primary key (codVendedor)
)
ENGINE = InnoDB;

create table enderecoComprador(
#	codEnd int NOT NULL AUTO_INCREMENT,
    codComprador int NOT NULL,
    cep int,
    rua varchar(50),
    numero int,
    bairro varchar(25),
    complemento varchar(25)
)
ENGINE = InnoDB;

create table enderecoVendedor(
#	codEnd int NOT NULL AUTO_INCREMENT,
    codVendedor int NOT NULL,
    cep int,
    rua varchar(50),
    numero int,
    bairro varchar(25),
    complemento varchar(25)
)
ENGINE = InnoDB;

create table produto(
	codproduto int NOT NULL AUTO_INCREMENT,
    nomeProduto VARCHAR(64),
    descricao varchar(255),
    valorUni double,
    foto mediumblob,
    estoque int,
    primary key (codproduto)
)
ENGINE = InnoDB;

create table venda(
	codVenda int NOT NULL AUTO_INCREMENT,
    codComprador int NOT NULL,
#    codproduto int,
#    codCarrinho int NOT NULL,
    formPag varchar(25),
    valor double,
    dataPagamento datetime,
    primary key (codVenda)
)
ENGINE = InnoDB;

create table carrinho(
    codComprador int NOT NULL,
    codproduto int NOT NULL,
    quantidade int,
    codVenda int,
    finalizado boolean
)
ENGINE = InnoDB;

#alter table comprador
#add foreign key (Endereco) references Endereco(codEnd),

alter table enderecoVendedor
add foreign key (codVendedor) references vendedor(codVendedor);

alter table enderecoComprador
add foreign key (codComprador) references comprador(codComprador);


alter table venda
add foreign key (codComprador) references comprador(codComprador);
#add foreign key (codCarrinho) references carrinho(codCarrinho);
#add foreign key (codproduto) references produto(codproduto);

alter table carrinho
add foreign key (codComprador) references comprador(codComprador),
add foreign key (codproduto) references produto(codproduto),
add foreign key (codVenda) references venda(codVenda);
