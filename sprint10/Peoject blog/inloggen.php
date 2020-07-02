<?php
$email = htmlspecialchars($_POST['e-mail']);
$wachtwoord= htmlspecialchars($_POST['wachtwoord']);
$bestand=fopen("gebruikers.txt" , "r");
if(!$bestand)
{
    echo "kon geen bestand openen!";
}
while (!feof($bestand))
{
    $account = fgets($bestand);
    $account = explode("*" , $account);
    if ($account[1] == $email && $account[2] == $wachtwoord){
        session_start();
        $_SESSION["USER"] = $email;
        $_SESSION["STATUS"] = 1;
        $_SESSION["ID"] = $_COOKIE["PHPSESSID"];
        //hier laat hij zien dat je ingelogd bent
        echo "
        <script>
        alert('U ben ingelogd als $email.');
        location.href='welkom.php';
        </script>
        ";
    }
}
//hier laat hij zien dat je verkeerde wachtwoord of gebruikersnaam hebt
echo "
<script>
alert('Wachtwoord of gebruikersnaam ongeldig.');
location.href='inloggen.html';
</script>
";
?>

