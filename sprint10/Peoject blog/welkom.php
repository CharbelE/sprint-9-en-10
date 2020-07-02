<?php
session_start();
$mijnSession = session_id();
if(isset($_SESSION['ID']) && $_SESSION['ID']===$mijnSession)//laat welkom zien als dat gelijk is aan mijnsession
    {
    echo "<h3>Welkom</h3>";
}else{
    echo"<br>Je moet eerst inloggen!<br>";
}
?>
<a herf="uitloggen.php"><!-- als je op de knop drukt gaat hij naar dat je bent uitgelogt en dat is op een andere file-->
    <input type="button" name="terug" value="Uitloggen" />
</a>
