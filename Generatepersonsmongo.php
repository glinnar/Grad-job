




<?php



$fnamn= array('Gurra',' Kungen','Calle','Olle','Berra','Danne','Olof','Gustaf','Sebastian','Marcus','Hans','Linus','Amanda','Cecilia','Elin','Alexandra','Sandra','Emma','Camilla','Lisa','Louise','Linnea','Victor',
    'Douglas','James','Harry','Ron','Luke','Greger','Glenn','Simon','Anton','Erik','David','Harald','Robin','Cristopher','Kristoffer','Leif','Tor','Kent','Hayden','Bruce','Brad','John','James','Kim','Isak','Oscar',
    'Jonathan','Craig','Goerge','Faith','Pernilla','Jennifer','Chelsea','Amy','Joakim','Bryan','Nick','Nikki','Pamela','Sofie','Ester');





$enamn= array('Linnar','Andersson','Axelsson','Johansson','Olofsson','Alexandersson','Jönsson','Henrikssson','Gustafsson','Göransson','Cahlberg','Jonasson','Alfredsson','Friberg','Forsberg',
    'Jeferson','Smith','Jones','Svensson','Eriksson','Wong','Lee','Jacobs','Duboi','Lambert','Ivanov','Lechkov','Jensen','Nielsen','Hansen','Larsen','Petrov','Virtanen','Koskinen','Lindholm','Leroy','Moreau','Garcia','Schneider','Wagner','Murphy'
,'O´brien','Doyle','McCarthy','Rossi','RUsso','Ferrari','Ricci','Conti','Fontana','Williams','Taylor','Walker','Ryan','King','Fernándes','López','Gómez','Blanco','Ramos','Silva','Costa','Santos','Vargas','Medoza','Roy','Bouchard','Leblanc','Girard','Miller','Clark','Lewis','Scott','Adams','Evans','Turner','Parker');






for($i=0;$i<20000;$i++){

    $pnr = mt_rand(100000,999999);
    $alder = mt_rand(1,90);

    $rand_keys=array_rand($fnamn,3);
    shuffle($rand_keys);
    $randfnamn=$fnamn[$rand_keys[0]];

    $rand_key=array_rand($enamn,2);
    shuffle($rand_key);
    $randenamn=$enamn[$rand_key[0]];

    echo "db.Person.insert({"."pnr".":" ."'$pnr'" ." ".","."namn".":" ."'$randfnamn'" ."".","
        ."efternamn".":" ."'$randenamn'"."".","."alder".":" ."'$alder'"."})" ."<br>";

}

?>




























