<?php
$vandaag = new DateTime("now");
echo "<br>Vandaag timestamp: " . $vandaag->getTimestamp();
// maakt huidig timestamp in en laat die zien
$eendag = 86400;
$begin2000 = DateTime::createFromFormat("d/m/Y", "1/1/2000");
$eind2000 = DateTime::createFromFormat("d/m/Y", "31/12/2000");
$begin = $begin2000->getTimestamp();
$einde = $eind2000->getTimestamp();
$dagenIn2000 = ($einde - $begin) / $eendag;
echo "<br>Aantal dagen in 2000: " . $dagenIn2000;
//berekent het aantal dagen in het jaar 2000 en laat die zien

//add DateInterval
$datum = new DateTime("2000-01-01");
echo "<br>Begindatum: " . $datum->format("Y-m-d");
// eerste datum 2000
$datum->add(new DateInterval("P10D"));
echo "<br>Tien dagen toevoegen: " . $datum->format("Y-m-d");
// voegt 10 dagen toe aan eerste datum 2000 en laat zien

//subtract DateInterval
$datum->sub(new DateInterval("P10D"));
echo "<br>Tien dagen weghalen: " . $datum->format("Y-m-d");
// haalt 10 dagen weg van vorige datum

//Formatteren
$format = '%A %d %B %Y %H:%M:%S';
$geformatteerde_datum = strftime($format);
echo "<br>Geformatteerde datum : " . $geformatteerde_datum;
//formateerd datum van vandaag

//lokale datuminstelling
setlocale(LC_TIME, "NL_NL");
$ned = strftime($format);
echo "<br>In het nederlands: " . $ned;
//vertaald de gevormateerde datum van vandaag in nederland

//date_format verwerken
$datum = date_create("2000-01-01");
echo "<br>Datum formatteren: " . date_format($datum, "Y-m-d");
echo "<br>Datum formatteren: " . date_format($datum, "d-m-Y");
// laat datum zien in verschillende volgorde

//date_diff
$factuurdatum = date_create("2018-10-10");
echo "<br>Factuurdatum: " . date_format($factuurdatum, "Y-m-d");
// maakt vactuurdatum
$vandaag = date_create("now");
echo "<br>Vandaag: " . date_format($vandaag, "Y-m-d");
//laat zien wat de dag van vandaag is
$interval = date_diff($vandaag, $factuurdatum);
echo "<br>U heeft nog: " . $interval->format("%R%a dagen om te betalen");
// berekend hoeveel dagen je nog hebt om te betalen(omdat de vactuur datum al geweest is gaat het getal in de min

//lab1.19 aantal dagen tot kerst
$kerst = date_create("2020-12-25");
date_format($vandaag, "Y-m-d");
$interval = date_diff($vandaag, $kerst);
echo"<br>U heeft nog ". $interval->format("%R%a dagen tot kerst");

