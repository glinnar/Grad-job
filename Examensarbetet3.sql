drop database cities;
Create database cities;
Use cities;
drop user 'Gurra'@'localhost';
CREATE USER 'Gurra'@'localhost';
grant all privileges on test.* to 'Gurra'@'localhost';

create table City (
postnr int NOT NULL, 
cityname varchar(30)

)Engine = INNODB;


SELECT*FROM City;