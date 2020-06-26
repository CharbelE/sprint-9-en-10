<?php
function korting(){//berkend de korting
    $korting = 0;
    if ( isset($_POST['student'])) $korting = $korting + 15;
    if ( isset($_POST['klant'])) $korting = $korting + 10;
    return($korting);
}

function serviceKosten($betalingswijze) {//berekend hoeveel hij er bij moet betalen
    switch ($_POST['betaling'])
    {
        case "v" :
            $servicekosten = 2;
            break;
        case "m" :
            $servicekosten = 2.5;
            break;
        case "p" :
            $servicekosten = 1.5;
            break;
        case "i" :
            $servicekosten = 1;
            break;
        default:
            echo "<p>U heeft geen betalingswijze gekozen</p>";
    }
    return $servicekosten;
}
function facturering($genre, $artiest, $album, $aantal, $prijs)//maakt de factuur aan
{
    for ($x = 0; $x < sizeof($_POST["albumcode"]); $x++)
    {
        echo
        "<table>
            <caption>
              <strong>Factuur</strong>
            </caption>
            <thead>
              <tr>
                <th style='background-color: yellow'>Genre</th>
                <th style='background-color: yellow'>Artiest</th>
                <th style='background-color: yellow'>Album</th>
                <th style='background-color: yellow'>Aantal</th>
                <th style='background-color: yellow'>Prijs</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>$genre</td>
                <td>$artiest</td>
                <td>$album</td>
                <td>$aantal</td>
                <td>$prijs</td>
              </tr>
            </tbody>
          </table>";
    }
}
function premium() {//vraagt of je premium lid wilt worden
    foreach ($_POST['aantal'] as $value) {
        if ($value > 5) {
            echo "word lid van onze premium club<br>";
        }
    }
}
?>
