<!DOCTYPE html>
<html lang="nl">
<head>
    <title>While-lus</title>
</head>
<body>
<h3>Voorbeeld van de while-lus</h3>
<?php
echo "<br>Zolang ons saldo lager is dan 2000 willen we dat de while-lus ons maandelijks saldo uitrekent";//laat de tekst zien
$saldo = 750;// wat de saldo is
$rente = 0.1;// wat de rente is
$maand = 1;// wat de maand is
echo "<br>Beginsaldo is:  " . $saldo . "<br />";//laat de beginsaldo zien
echo "START... ";//laat start zien
while ($saldo < 2000)//als de saldo kleiner is dan 2000 doet hij de volgende zien
{
    $saldo = $saldo + ($saldo * $rente);//berekend saldo
    $saldo = sprintf("%0.2f", $saldo);
    echo "<br>Maand: $maand je saldo is: $saldo";//laat maand met saldo zien
    $maand++;//telt een maan erbij op
}
echo "<br>FINISH";//en als laatste zegt hij dat hij klaar is
?>
</body>
</html>
