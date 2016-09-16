drop database Personer;
Create database Personer;
Use Personer;
drop user 'Gurra'@'localhost';
CREATE USER 'Gurra'@'localhost';
grant all privileges on test.* to 'Gurra'@'localhost';


Create table Person (
pnr INT (6) NOT NULL,
namn Varchar(30),
efternamn VARCHAR(30),
alder int(3)
)
ENGINE= INNODB;


Select * from Person;