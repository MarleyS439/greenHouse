CREATE DATABASE IF NOT EXISTS bdGreenHouse;

USE bdGreenHouse;

/* TIPO DE IMÓVEL */
CREATE TABLE IF NOT EXISTS tbTipoImovel (
    codTipoImovel INT PRIMARY KEY AUTO_INCREMENT,
    tipoImovel VARCHAR(15) UNIQUE
);

/* IMÓVEL */
CREATE TABLE IF NOT EXISTS tbImovel (
    codImovel INT PRIMARY KEY AUTO_INCREMENT,
    logradouroImovel VARCHAR(15),
    numeroLogradouroImovel SMALLINT,
    bairroLogradouroImovel VARCHAR(15),
    cidadeLogradouroImovel VARCHAR(15),
    UfLogradouroImovel CHAR(2),
    cepLogradouroImovel CHAR(8),
    valorImovel DECIMAL(6, 2),
    metragemImovel INT,
    unidadeMetragemImovel CHAR(3) UNIQUE,
    codTipoImovel INT,
    CONSTRAINT FK_tbImovel_3 FOREIGN KEY (codTipoImovel) REFERENCES tbTipoImovel (codTipoImovel)
);

/* TIPO DE USUÁRIO */
CREATE TABLE IF NOT EXISTS tbTipoUser (
    codTipoUser INT PRIMARY KEY AUTO_INCREMENT,
    tipoUser VARCHAR(15) UNIQUE
);

/* USUÁRIO */
CREATE TABLE IF NOT EXISTS tbUser (
    codUser INT PRIMARY KEY AUTO_INCREMENT,
    primeiroNomeUser VARCHAR(15),
    sobrenomeUser VARCHAR(15),
    dataNascimentoUser DATE,
    emailUser VARCHAR(60),
    rgUser VARCHAR(20),
    cpfUser CHAR(11),
    senhaUser VARCHAR(16),
    fotoPerfilUser VARCHAR(80),
    receberNoticias CHAR(3),
    codTipoUser INT,
    UNIQUE (cpfUser, emailUser),
    CONSTRAINT FK_tbUser_3 FOREIGN KEY (codTipoUser) REFERENCES tbTipoUser (codTipoUser)
);

/* TELEFONE DO USUÁRIO */
CREATE TABLE IF NOT EXISTS tbTelUser (
    codTelUser INT PRIMARY KEY AUTO_INCREMENT,
    telUser VARCHAR(14),
    codUser INT,
    CONSTRAINT FK_tbTelUser_2 FOREIGN KEY (codUser) REFERENCES tbUser (codUser)
);

/* IMÓVEL FAVORITO */
CREATE TABLE IF NOT EXISTS tbImovelFavorito (
    codImovelFavorito INT PRIMARY KEY AUTO_INCREMENT,
    codUser INT,
    codImovel INT,
    CONSTRAINT FK_tbImovelFavorito_2 FOREIGN KEY (codUser) REFERENCES tbUser (codUser),
    CONSTRAINT FK_tbImovelFavorito_3 FOREIGN KEY (codImovel) REFERENCES tbImovel (codImovel)
);
