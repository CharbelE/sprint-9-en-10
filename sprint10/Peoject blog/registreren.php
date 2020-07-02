<?php
if (issest($_POST["submit"])){
    $fotoNaam = basename($_FILES["foto"]["name"]);
    global $uploadsMap;
    function upload(){
        global $uploadsMap;
        $uploadsMap = "uploads/";
        $uploadsMap = $uploadsMap . basename($_FILES['foto']['name']);
        $fotoType = pathinfo($uploadsMap,PATHINFO_EXTENSION);
        //controleer of deze foto al bestaat
        if (file_exists($uploadsMap)){
            echo"deze foto bestaat al.";
            return false;
        }
        //valideer de fotoSize
        if($_FILES["foto"]["size"] > 500000){
            echo "deze foto is te groot.";
            return false;
        }
        //valideer de format
        if($fotoType != "jpg" &&
            $fotoType!= "png" &&
            $fotoType != "jpeg" &&
            $fotoType != "gif"){
            echo "foto moet jpg, png ,jpeg of gif zijn";
            return false;
        }
        return true;
    }
}//verplaats foto van temp-map naar uploadsmap
if(upload()){
    if (move_upload_files($_FILES["foto"]["temp_name"], $uploadsMap)) {
        echo "de foto is geüpload.";
        //gebruiker oplslaan
        $bestand = fopen("gebruikers.txt", "ab");
        if (!$bestand) {
            echo "kon geen bestad openen!";
        }
        $naam = htmlspecialchars($_POST["naam"]);
        $email = htmlspecialchars($_POST["e-mail"]);
        $wachtwoord = htmlspecialchars($_POST["password"]);
        $profielFoto = $fotoNaam;
        $profiel =
            $naam . "*" .
            $email . "*" .
            $wachtwoord . "*" .
            $profielFoto . "\n";
        fwrite($bestand, $profiel, strlen($profiel));
        if (fclose($bestand)) {
            echo "account is aangemaakt.";
        } else {
            echo "kon bestand niet afsluiten";
        }
    }
    else{
        echo"probleem bij het uploaden foto niet geüpload.";
    }
}
?>
<a href="registreren.html"><input type="button"
                                  name="terug" value="terug"/>