

<?php

$servername = "localhost";
$username = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=cities", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"."<br>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ini_set('max_execution_time', 1200);



$city= array('Gothenburg','Stockholm','Malmo','Oslo','Copenhagen','Berlin','Prague','Warsaw','London','Manchester','Liverpool','Glasgow','Edinburgh','Dublin','New York','Washington','Seattle','San Fransisco'
	,'Dallas','Anaheim','Los Angeles','Boston','Chicago','Philadelphia','Helsinki','Moscow','Budapest','Munchen','Hamburg','Paris','Madrid','Barcelona ',' Aten',' Istanbul ','Rome ','Venice ','Milano ','Beijing ',
    'Hongkong','Las Vegas','Tokyo ','Kyoto ',' Sidney ',' Melbourne','Zurich ',' Sofia',' Brussels',' Miami',' New Jersey','Colorado ','Rio ',' Marseille','Turin ','St.Petersburg ',' Zagreb','Santiago ','Lisbon ','
     Porto','Bombay ',' Jerusalem ',' Kairo ');




for($i=0;$i<20000;$i++){

$postnr = mt_rand(10000,90000);



$randcity=array_rand($city,2);
shuffle($randcity);
$randomcity=$city[$randcity[0]];









$sql= "INSERT INTO City (postnr,cityname) VALUES  ('$postnr','$randomcity')";

   $conn->exec($sql); 
 

 echo "$postnr "." $randomcity"."<br>";

}




?>




























