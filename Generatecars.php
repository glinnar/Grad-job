

<?php

$servername = "localhost";
$username = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=bilar", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"."<br>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

	ini_set('max_execution_time', 1200);


$regnrbok= array('AAA',' BBB','CCC','DDD','EEE','FFF','GGG','HHH','III','JJJ','KKK','LLL','MMM','NNN','OOO','PPP','QQQ','RRR','SSS','TTT','UUU','VVV','WWW','XXX','YYY','ZZZ');

$märke= array('Volvo','SAAB ','Opel ','Porsche ','BMW ','Hundai ','Honda ','Skoda ','Volkswagen ','Audi ','Mercedes ',
'Ferrari','Mcclaren ','Citroeng ','Renault ','Peugoet ','Dodge ','Chrystler','Lexus','Seat','Jeep'
,'Range rover','Bentley','Roolls Royce','Lamborghini','KIA','Nissan','Lotus','Fiat','Alfa romero'
,'Corvette','Mitsubishi','Ford','Koenigsegg','Buggati');


$färg= array('Black','White','Blue','Red','Green','Gray','Yellow','Orange','Winered','Purple','Brown','Bronze','Darkblue'
,'Darkgreen','Darkred','Iceblue','Matte black','Limegreen','Chrome','Pink','Forestgreen');


for($i=0;$i<20000;$i++){


$regnr = mt_rand(100,900);

$randregnr=array_rand($regnrbok,26);
shuffle($randregnr);
$randomregnr=$regnrbok[$randregnr[0]] ;



$randmärke=array_rand($märke,2);
shuffle($randmärke);
$randommärke=$märke[$randmärke[0]];


$randfärg=array_rand($färg,2);
shuffle($randfärg);
$randomfärg=$färg[$randfärg[0]];







$sql= "INSERT INTO Bil (regnr,regnrbok,brand,color) VALUES  ('$regnr','$randomregnr','$randommärke','$randomfärg')";

   $conn->exec($sql); 
 

 echo "$randomregnr"."<br>";

}




?>



























