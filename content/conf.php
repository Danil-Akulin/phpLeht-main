<?php
$serverinimi='localhost';
$kasutajanimi='danilakulin';
$parool='123456';
$andmebaasinimi='akulin';
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus->set_charset('utf8');
/*
 * CREATE TABLE loomad(
    id int primary key AUTO_INCREMENT,
    nimi varchar(50),
    kirjeldus text);

Insert into loomad(nimi, kirjeldus)
values ('hiir', 'siia tuleb kirjeldus');

Select * from loomad
CREATE TABLE puud(
    id int PRIMARY key AUTO_INCREMENT,
    puunimi varchar(20),
    pilt TEXT)

*CREATE TABLE kasutajad(
	id int NOT null PRIMARY KEY AUTO_INCREMENT,
    nimi varchar(10),
    parool varchar(200),
    onAdmin tinyint,
    koduleht varchar(100))

*CREATE TABLE `Treener` (
  `TreenerID` int,
  `Nimi` varchar(20),
  `Perekonnanimi` varchar(20),
  PRIMARY KEY (`TreenerID`)
);

*/
?>