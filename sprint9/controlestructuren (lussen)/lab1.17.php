<!DOCTYPE html>
<html lang="nl">
<head>
    <title>do-while-lus</title>
</head>
<body>
<h3>Voorbeeld van de do-while-lus</h3>
<?php
echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";//laat de tekst zien
$saldo = 2100;//wat de saldo is
$rente = 0.1;// wat de rente is
$maand = 1;// wat de maand is
echo "<br>Beginsaldo is: $saldo";//laat de beginsaldo zien
echo "<br>START...";//laat start zien
do {
    $saldo = $saldo + ($saldo * $rente);//berekend saldo uit
    $saldo = sprintf("%0.2f", $saldo);
    echo "<br>Maand: $maand je saldo is: $saldo";//laat zien wat hij heeft
    $maand++;//telt een maan erbij op

    if($maand == 2)// als maand 2 is zegt hij geen rente
    {
        echo"<br>februari betaalt geen rente";
        continue;
    }

    if($saldo > 2000)//als de saldo groter is dan 2000 laat hij de volgende zien en stopt hij met verdergaan
    {
        echo "Maximale saldo 2000 is bereikt";
        exit;
    }

    if($maand == 6 && $saldo < 1000)//als maand 6 is en saldo kleiner dan 1000 moet hij zegen dat je slado te laag is en stopt hij
    {
        echo"<br>je saldo is te laag";
        exit;
    }



}
while($saldo < 2000);// als het kleiner is dan 2000 doet hij wat hier boven is aangegeven
echo "<br>FINISH";//en als laast zegt hij dat hij klaar is
?>
</body>
</html>