<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Cookies</title>
</head>
<body>
<form name="login" action="" method="post">
    Gebruikersnaam:<br>
    <input type="text" name="user" /><br><br>      <!--creeër de inputbox voor gebruikers naam.--!>
    <input type="submit" name="submit" value="Inloggen" /> <!-- verstuur de input.--!>
</form>
</body>
<?php
if(isset($_POST["submit"])){
    $user = $_POST["user"];  //defineer variabele "user"
    $melding = welkom($user);
    echo "<br> $melding";
}
function welkom($user) {  //creeër de welkom function
    setcookie($user, $user);

    if(isset($_COOKIE[$user])){
        echo "<br>Hallo " . $_COOKIE[$user] . " Welkom terug"; //als de coockie als bekend is zegt het welkom terug
    }
    else {
        echo "Hallo $user, u bent onze nieuwste gebruiker";  //als het neit bekend is zegt die dat je de nieuwste gebruiker bent
        setcookie("$user", $_POST["user"]);
    }
}
ob_end_flush();
?>
</html>