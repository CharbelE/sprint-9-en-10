
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>foreach-lus</title>
</head>
<body>
<h3>Voorbeeld van de foreach-lus</h3>
<?php
$kleuren["oranje"] = "orange";//geeft kleur aan
$kleuren["rood"] = "red";//geeft kleur aan
$kleuren["paars"] = "purple";//geeft kleur aan
$kleuren["groen"] = "green";//geeft kleur aan
$kleuren["blauw"] = "blue";//geeft kleur aan
$kleuren["geel"] = "yellow";//geeft kleur aan
foreach ($kleuren as $kleur ) {//geeft kleuren aan als kleur
    if ($kleur == "yellow") {//als kleur geel is moet het naar zwart
        $kleur = "black";
    }
    echo "<br><font color=$kleur>Deze tekst in $kleur";//laat de kleuren zien
}
?>
</body>
</html>