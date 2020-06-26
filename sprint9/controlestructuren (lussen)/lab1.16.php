<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <style>
        .album {clear: left; width: 100%;}
        .omslag {float: left;}
        .gegevens {float: left; padding-left: 20px;}
        .korting {clear: left;}
        .aantal {background-color: #f8ce6c;}
    </style>
    <title>Mijn winkelmandje</title>
</head>
<body style="font-family: Verdana; font-size: 9px">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src="img/evora.jpg" width="50px" alt="X"/><!-- laat foto zien-->
        </div>
        <div class="gegevens">
            Cesaria Evora " Em Um Concerto" Prijs: $9
            <input type="hidden" name="albumcode[0]" value="001"><!-- geeft albumcode-->
            <input type="hidden" name="artiest[0]" value="Cesaria Evora"><!-- geeft artiest-->
            <input type="hidden" name="album[0]" value="Em Um Concerto"><!-- geeft album-->
            <input type="hidden" name="prijs[0]" value="9"><!-- geeft prijs-->
            <input type="hidden" name="genre[0]" value="World"><!-- geeft genre aan-->
            <br />Aantal:
            <input type="text" size=2 maxlength=3 name="aantal[0]" class="aantal" value="0"><!-- vraagt hoeveel je wilt hebben-->
        </div>
    </div>
    <div class="album">
        <div class="omslag">
            <img src="img/manuchao.jpg" width="50px" alt="X"/><!-- laat foto zien-->
        </div>
        <div class="gegevens">
            manu chao "Clandestino" Prijs: $5
            <input type="hidden" name="albumcode[1]" value="002"><!-- geeft albumcode-->
            <input type="hidden" name="artiest[1]" value="Manu Chao"><!-- geeft artiest-->
            <input type="hidden" name="album[1]" value="Clandestino"><!-- geeft album-->
            <input type="hidden" name="prijs[1]" value="5"><!-- geeft prijs-->
            <input type="hidden" name="genre[1]" value="World"><!-- geeft genre aan-->
            <br />Aantal:
            <input type="text" size=2 maxlength=3 name="aantal[1]" class="aantal" value="0"><!-- vraagt hoeveel je wilt hebben-->
        </div>
    </div>
    <div class="album">
        <div class="omslag">
            <img src="img" width="50px" alt="X"/><!-- laat foto zien-->
        </div>
        <div class="gegevens">
            papa roach "Last Resort" Prijs: $7
            <input type="hidden" name="albumcode[2]" value="003"><!-- geeft albumcode-->
            <input type="hidden" name="artiest[2]" value="Papa Roach"><!-- geeft artiest-->
            <input type="hidden" name="album[2]" value="Last Resort"><!-- geeft album-->
            <input type="hidden" name="prijs[2]" value="7"><!-- geeft prijs-->
            <input type="hidden" name="genre[2]" value="World"><!-- geeft genre aan-->
            <br />Aantal:
            <input type="text" size=2 maxlength=3 name="aantal[2]" class="aantal" value="0"><!-- vraagt hoeveel je wilt hebben-->
        </div>
    </div>
    <div class="korting">
        <br><hr />Korting:<br />
        <input type="checkbox" name="student" value="15" />Student: 15%<br /><!--vraagt of je student bent-->
        <input type="checkbox" name="klant" value="10" />Student: 10%<br /><!--vraagt of je al klant ben -->
        <p>Selecteer een betalingswijze:</p><!-- vraagt welke betalingwijze je wilt gebruken-->
        <select name="betaling" value="true"><!--geef aan welke van de vier opties je wilt-->
            <option value="v">Visa</option>
            <option value="m">MasterCard</option>
            <option value="p">PayPal</option>
            <option value="i">Ideal</option>
        </select>
        <input type="submit" width="300px" name="verzenden" value=" Bestellen " />
    </div>
</form>
</body>
</html>
<?php
function afboeking(){//berkend de korting
    $korting = 0;
    if ( isset($_POST['student'])) $korting = $korting + 15;
    if ( isset($_POST['klant'])) $korting = $korting + 10;
    return($korting);
}
if(isset($_POST["aantal"][0]) ) {
    if(empty($_POST["aantal"]) ){
        echo "aantal niet ingevuld";
    }else{
        foreach($_POST['aantal'] as $key => $value) {
            echo "<br>Besteld albums: $value<br>";
        }
    }
}
echo "<br>Korting is: " . afboeking() . "%";//laat korting zien

if (isset($_POST["verzenden"]))
{
    switch ($_POST['betaling'])
    {
        case "v" :
            echo "<p>betalingswijze: Visa</p>";
            break;
        case "m" :
            echo "<p>betalingswijze: MasterCard</p>";
            break;
        case "p" :
            echo "<p>betalingswijze: PayPal</p>";
            break;
        case "i" :
            echo "<p>betalingswijze: Ideal</p>";
            break;
        default:
            echo "<p>U heeft geen betalingswijze gekozen</p>";
    }
    include_once("externe_functions.php");// connect
    echo "<br>De korting()-function: " . korting() . "%";//laat korting zien van de aantal hoeveel je krijgt
    $betalingswijze = $_POST['betaling'];
    $serviceKosten = serviceKosten($betalingswijze);
    echo "<br>Servicekosten zijn: " . $serviceKosten;//laat servicekosten zien
    premium();//laat premium zien
    $genre = isset($_POST['genre']);
    $artiest = isset($_POST['artiest']);
    $album = isset($_POST['album']);
    $aantal = isset($_POST['aantal']);
    $prijs = isset($_POST['prijs']);
    facturering($genre,$artiest,$album,$aantal,$prijs);//laat de factuur zien maar is fout
}


?>