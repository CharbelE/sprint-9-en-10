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
    <div class="korting">
        <br><hr />Korting:<br />
        <input type="checkbox" name="korting[0]" value="15" />Student: 15%<br />
        <input type="checkbox" name="korting[1]" value="10" />Student: 10%<br />
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
if(isset($_POST["aantal"][0]) && isset($_POST["korting"][0][1]) ) {//hier kijkt hij na hoeveel je wilt en kijkt hij of je korting heb aangeklikt en laat hij zien
    if(empty($_POST["aantal"]) ){
        echo "aantal niet ingevuld";
    } else {
        foreach($_POST['aantal'] as $key => $value) {
            echo "<br>Besteld albums: $value<br>";
        }
        foreach($_POST['korting'] as $selected) {
            echo "Korting is: $selected%<br>";
        }
    }
}
if (isset($_POST["verzenden"]))//hier kijkt die welke van de 4 hij heeft gekozen en laat die zien wanneer je op verzenden hebt geklikt
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
}
?>