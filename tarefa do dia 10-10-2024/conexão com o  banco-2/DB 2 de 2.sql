CREATE DATABASE vendas;
USE vendas;

CREATE TABLE Produto (
    Codigo_Produto INTEGER PRIMARY KEY,
    Descricao_Produto VARCHAR(30),
    Preco_produto FLOAT
);

CREATE TABLE Nota_Fiscal (
    Numero_NF INTEGER PRIMARY KEY,
    Data_NF DATE,
    Valor_NF FLOAT
);

CREATE TABLE Itens (
    Produto_Codigo_Produto INTEGER,
    Nota_Fiscal_Numero_NF INTEGER,
    Num_Item INTEGER,
    Qtde_Item INTEGER,
    PRIMARY KEY (Produto_Codigo_Produto, Nota_Fiscal_Numero_NF, Num_Item),
    FOREIGN KEY (Produto_Codigo_Produto) REFERENCES Produto(Codigo_Produto),
    FOREIGN KEY (Nota_Fiscal_Numero_NF) REFERENCES Nota_Fiscal(Numero_NF)
);

ALTER TABLE Produto MODIFY Descricao_Produto VARCHAR(50);

ALTER TABLE Nota_Fiscal ADD ICMS FLOAT AFTER Numero_NF;

ALTER TABLE Produto ADD Peso FLOAT;

ALTER TABLE Itens DROP PRIMARY KEY;
ALTER TABLE Itens ADD PRIMARY KEY (Produto_Codigo_Produto, Nota_Fiscal_Numero_NF, Num_Item);

DESCRIBE Produto;

DESCRIBE Nota_Fiscal;

ALTER TABLE Nota_Fiscal CHANGE Valor_NF ValorTotal_NF FLOAT;

ALTER TABLE Nota_Fiscal DROP COLUMN Data_NF;

DROP TABLE Itens;

ALTER TABLE Nota_Fiscal RENAME TO Venda;











