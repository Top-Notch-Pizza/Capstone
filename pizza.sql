DROP DATABASE IF EXISTS topnotchpizza;
create database topnotchpizza;
use topnotchpizza;

CREATE TABLE IF NOT EXISTS users (
 id int(11) NOT NULL AUTO_INCREMENT,
 firstname varchar(50) NOT NULL,
 lastname varchar(50) NOT NULL,
 email varchar(50) NOT NULL,
 phone varchar(50) NOT NULL,
 street varchar(50) NOT NULL, 
 city varchar(50) NOT NULL,
 province varchar(50) NOT NULL,
 postalcode varchar(50) NOT NULL,
 password varchar(50) NOT NULL,
 PRIMARY KEY (id)
);