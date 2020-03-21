DROP DATABASE IF EXISTS `igreja`;

CREATE DATABASE `igreja`;

USE `igreja`;

CREATE TABLE `enderecos` () ENGINE=INNODB;

CREATE TABLE `tipos_telefones` () ENGINE=INNODB;

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