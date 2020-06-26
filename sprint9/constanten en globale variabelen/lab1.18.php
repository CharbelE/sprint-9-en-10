<?php
// superglobale scope
$GLOBALS['url'] = "www.mijndomeinnaam.nl";
// globale scope
global $email;
$email = "webmaster@mijndomeinnaam.nl";
// globale constanten
define("BIJDRAGE",0.10);
function doneren($bedrag)
{
    // function scope
    $melding = "GIRO 555";
    echo "<br>" . $melding;//om melding laten zien
    echo "<br>URL: " . $GLOBALS["url"];//om de url code $GLOBALS te laten zien
    echo "<br>Bedrag: " . $bedrag;//het bedrag laten zien die hij geeft
    global $email;
    echo "<br>E-mail: " . $email;//email laten zien
    $bijdrage = $bedrag * BIJDRAGE;//berekend bijdragen
    $donatie = $bedrag + $bijdrage;//berkend donatie
    echo "<br>Inclusief bijdrage: $donatie";//laat donatie zien
    static $pot;
    $pot = $pot + $donatie;//berekend wat er in zit
    echo "<br><span style='background-color: yellow'>
    Totaal bedrag in pot $pot</span><br>";//laat zien hoeveel hij geeft
    static $hoogste;
    if ($donatie > $hoogste){
        $hoogste = $donatie;//kijkt welke het hoogste is
    }
        echo "<br>Hoogste donatie tot nu toe is: " . $hoogste;//laat de hoogste zien
}
doneren(100);
doneren(1000);
doneren(33333);
