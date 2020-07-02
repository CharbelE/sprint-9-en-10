<?php
//maak array aan
$user = array (
    "naam" => "Shyam",
    "e-mail" =>"shyam@nu.nl",
    "wachtwoord" => "",
    "photo" => "shyam.jpg"
);
//laat array zien
echo "<br>userArray: <br>";
var_dump($user,true);
$userJsonString = json_encode($user);
echo "<br>userJsonLitral: <br>" . $userJsonString;
//nieuwe array word aangemaakt
$boekenJsonLiteral = '[
        {"titel":"Stoner","auteur":"John Williams","genre":"Fictie","prijs":"19.99"},
        {"titel":"De cirkel","auteur":"Dave Eggers","genre":"Fictie","prijs":"22.5"},
        {"titel":"Rayuela","auteur":"Julio Cortazar","genre":"Fictie","prijs":"25.5"}]';
$boeken = json_decode($boekenJsonLiteral,true);
//verandert array
foreach ($boeken as $boek){
    echo "<br><br>titel: ".$boek["titel"];
    echo "<br>auteur: ".$boek["auteur"];
    echo "<br>genre: ".$boek["genre"];
    echo "<br>prijs: ".$boek["prijs"];
    // showt arrat
}
//verandert array
echo "<br><br>---- Opgave 67";
$boekenObj = json_decode($boekenJsonLiteral);
foreach($boekenObj as $boek){
    echo "<br>titel: ".$boek->titel;
    echo "<br>auter: ".$boek->auteur;
    echo "<br>genre: ".$boek->genre;
    echo "<br>prijs: ".$boek->prijs;
    // laat array zien
}