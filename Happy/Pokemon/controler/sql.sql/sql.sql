create database pokemon;

CREATE TABLE logins(
id smallint primary key auto_increment,
email NVARCHAR(15),
senha NVARCHAR(15)
);

CREATE TABLE Cad_Usuario(
id smallint primary key auto_increment,
email NVARCHAR(15),
senha NVARCHAR(15),
nome nvarchar (20),
sobrenome nvarchar (20)

);

