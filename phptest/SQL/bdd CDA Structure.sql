#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS CDA;
USE CDA;

#------------------------------------------------------------
# Table: Ville
#------------------------------------------------------------

CREATE TABLE Ville(
        idVille      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomVille      Varchar (50) NOT NULL ,
        numeroDepartementVille      Int NOT NULL ,
        CPVille     Int NOT NULL ,
        DateMAJ     Date NOT NULL
        
)ENGINE = INNODB DEFAULT CHARSET = utf8;

