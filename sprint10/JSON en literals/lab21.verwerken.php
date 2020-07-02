<?php
if(isset($_POST["registreren"])) {

    $voornaam      = $_POST["voornaam"];
    $naam          = $_POST["naam"];
    $geboortedatum = $_POST["geboortedatum"];
    $straat        = $_POST["straat"];
    $postcode      = $_POST["postcode"];
    $plaats        = $_POST["plaats"];
    $emailadres    = $_POST["E-mailadres"];
    $wachtwoord    = $_POST["wachtwoord"];
    $minderjarig   = $_POST["minderjarig"];
// hier boven slaat op wat je invult in de form
    $gebruiker = array(
        "voornaam"      => $voornaam,
        "naam"          => $naam,
        "geboortedatum" => $geboortedatum,
        "straat"        => $straat,
        "postcode"      => $postcode,
        "plaats"        => $plaats,
        "E-mailadres"   => $emailadres,
        "wachtwoord"    => $wachtwoord,
        "minderjarig"   => $minderjarig
    );
    //dit stuk zorgt ervoor dat je je antwoorden van je form dan terug vingen
    ($gebruiker);
    $gebruikersJsonString = json_encode($gebruiker);
    echo "<br><br>".$gebruikersJsonString;//vraagt antwoorden form op
}
else {
    echo "geen informatie ingevoerd ga naar <a href='lab1.21.php'>de formulier.</a>";// als er niks is ingevult in form dan laat hij de bovende text zien
}

