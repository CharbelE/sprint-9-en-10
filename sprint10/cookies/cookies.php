<?php
$gebruiker =0; //defineer het variable "cookie
ob_start();
echo "Maak een cookie";
setcookie("gebruiker", "Sanskriet", mktime(0,0,0,1,1,2055)); //creër de cookie
$gebruiker = $_COOKIE["gebruiker"];
echo "<br>Gebruikersnaam is: $gebruiker <br>";// vermeld het
print_r($_COOKIE); //print the cookie
ob_end_flush();
setcookie("user", "", time()-3600);
if(isset($_COOKIE["user"])) //checkt of de cookie gelijk is aan gebruiker
{
    echo $_COOKIE["user"];  // print de cookie
} else {
    echo "<br>Cookie is verwijderd"; // coockie is verwijderd
}
?>

