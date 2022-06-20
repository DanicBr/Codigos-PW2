CREATE DATABASE contato;
use contato;
CREATE table contatos( 
	id int PRIMARY KEY AUTO_INCREMENT,
 	nome varchar(100), 
  	senha varchar(32),
  	email varchar(100)
)