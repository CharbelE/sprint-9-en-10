<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html;
          charset=UTF-8" />
    <title>switch opdracht</title>
</head>
<body>
<form name="order"
action=""
method="post">
    <p>Selecteer een bestemming:</p><!--vraagt voor bestemming-->
    <select name="land" value="true"><!--selecteer een van de 5-->
        <option value=" "></option>
        <option value="nl">Nederland</option>
        <option value="be">België</option>
        <option value="de">Duitsland</option>
        <option value="es">Spanje</option>
    </select>
    <input type="submit" name="submit"/>
    value="Versturen">
    <p>---------------------------------------------------</p>
</form>
<?php
if (isset($_POST["submit"]))// als je op submit hebt geklikt heeft hij gekeken welke je hebt en kijkt hij welke van de 5 je hebt om aan te geven hoeveel retourtje kost
{
    switch ($_POST['land'])
    {
        case "nl" :
            echo "<p>Retourtje Nederland is 100</p>";
            break;
        case "be" :
            echo "<p>Retourtje Belgie is 80</p>";
            break;
        case "de" :
            echo "<p>Retourtje Duitsland is 90</p>";
            break;
        case "es" :
            echo "<p>Retourtje Spanje is 80</p>";
            break;
        default:
            echo "<p>U heeft geen bestemming gekozen</p>";
    }
}
?>
</body>
</html>