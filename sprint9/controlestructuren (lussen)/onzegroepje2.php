<?php
//alle leden van de groepje met 1 die is gestopt en 1 waar van we niks af weten(enrico en malik)
$leden = array("0307570"=>"Charbel Elkhoury <br>leeftijd: 18<br>Adres: Enschede<br>",
    "0322399"=>"Clint Ellenbroek <br>Leeftijd: 16 <br>adres: Haaksbergen<br>",
    "0322766"=>"Enrico Fascicolo <br>Leeftijd: 18 <br>Adres: Enschede<br>",
    "0276085"=>"Malik Gorgis <br>Leeftijd: 23 <br>Adres: Enschede<br>",
    "0319003"=>"Emre Erdem<br>Leeftijd: 17<br>Adres: Enschede<br>",
    "0320507"=>"Johan Bos<br>Leeftijd: 19<br>Adres: Enschede");

foreach($leden as $x => $val) {//leden is x
    echo "$x = $val<br>";//laat x zien met alle informatie
}
?>
