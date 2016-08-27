
create database clube;
create table IF NOT EXISTS time (
  id int NOT NULL auto_increment
, nome varchar(100) NOT NULL
, PRIMARY KEY (id))
ENGINE=InnoDB COLLATE=utf8_unicode_ci;

create table IF NOT EXISTS socio (
  id int not null auto_increment
, nome varchar(100) not null
, id_clube int not null
, PRIMARY KEY (id)
, CONSTRAINT TimSoc FOREIGN KEY (id_clube) REFERENCES time (id)
) ENGINE=InnoDB COLLATE=utf8_unicode_ci;

