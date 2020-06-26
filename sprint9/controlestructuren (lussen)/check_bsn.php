<!DOCTYPE html>
<html lang="nl">
<head>
    <title>bsn checker</title>
</head>
<body>
<form name="BSNcheck"
      action=""
      method="post">
    <input type="number" name="BSN">
    <input type="submit" name="submit" value="check!">
</form>

<?php

function Elfproef(){

}

if(isset($_POST["submit"])) {
    $BSNnummer = $_POST["BSN"];
    echo $BSNnummer . "<br />";

    $BSNnummer = str_split($BSNnummer);

    if(count($BSNnummer) != 9) {//als het niet gelijk is aan 9 geeft hij aan dat je bsn nummer niet klopt
        echo "Uw bsn nummer klopt niet, omdat er te weinig of teveel getallen inzitten!";
    }
    elseif(count($BSNnummer) == 9) {
        for ($i=0; $i < 9; $i++) {
            $keer = 9 - $i;
            if($keer == 1) {
                $keer = -1;
            }
            $getal[$i] = $BSNnummer[$i] * $keer;
        }
        $sum = array_sum($getal);
        $elfproef = $sum / 11;//om te zien of hij wel of niet haald

        if ( strpos( $elfproef, "." ) == false ) {//als hij gelijk is zegt hij dat het klopt als niet zegt hij niet gehaald
            echo "Uw bsn nummer klopt helemaal.";
        }
        else {
            echo "Uw bsn nummer heeft de elfproef niet gehaalt";
        }
    }
}
?>
</body>
</html>