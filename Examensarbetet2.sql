
drop database bilar;
Create database bilar;
Use bilar;
drop user 'Gurra'@'localhost';
CREATE USER 'Gurra'@'localhost';
grant all privileges on test.* to 'Gurra'@'localhost';

CREATE TABLE Bil(
regnr int,
regnrbok varchar(30),
brand varchar(30),
color varchar(30) charset utf8

)ENGINE= INNODB;


SELECT * FROM Bil;