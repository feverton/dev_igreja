DROP DATABASE IF EXISTS `igreja`;

CREATE DATABASE `igreja`;

USE `igreja`;

CREATE TABLE `correios` (
	`id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`cep` CHAR(8) UNIQUE,
	`logradouro` VARCHAR(64),
	`bairro` VARCHAR(64),
	`localidade` VARCHAR(64),
	`uf` CHAR(2)
) ENGINE=INNODB;

CREATE TABLE `tipos_enderecos` (
	`id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`descricao` VARCHAR(32)
) ENGINE=INNODB;

INSERT INTO `tipos_enderecos` VALUES (1,'CASA'),(2,'LOTE'),(3,'APARTAMENTO');

CREATE TABLE `enderecos` (
	`id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`endereco_id` INT,
	`tipoendereco_id` INT,
	`numero` VARCHAR(16),
	FOREIGN KEY (`endereco_id`) REFERENCES `enderecos`(`id`)
	ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY (`tipoendereco_id`) REFERENCES `tipos_enderecos`(`id`)
	ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=INNODB;

CREATE TABLE `tipos_telefones` (
	`id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`descricao` VARCHAR(32)
) ENGINE=INNODB;

CREATE TABLE `telefones` () ENGINE=INNODB;

CREATE TABLE `igrejas` (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(64),
	razao VARCHAR(128),
	endereco_id INT,
	data_criacao TIMESTAMP,

) ENGINE=INNODB;

CREATE TABLE `pessoas` () ENGINE=INNODB;

CREATE TABLE `membros` () ENGINE=INNODB;

CREATE TABLE `casais` () ENGINE=INNODB;

CREATE TABLE `filhos` () ENGINE=INNODB;

#Tipo de grupos nos quais o ministério será dividido (salas, grupos, turmas, escalas)#
CREATE TABLE `divisoes` () ENGINE=INNODB;

CREATE TABLE `ministerios` (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(64),
	divisao_id INT 
) ENGINE=INNODB;

CREATE TABLE `tipos_lideres` () ENGINE=INNODB;

CREATE TABLE `grupos` () ENGINE=INNODB;

CREATE TABLE `lideres_ministerios` () ENGINE=INNODB;

CREATE TABLE `lideres_grupos` () ENGINE=INNODB;