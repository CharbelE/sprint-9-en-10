<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>for-lus</title>
</head>
<body>
<h3>Voorbeeld van de for-lus</h3>
<?php
echo "We willen de for-lus 10 rondjes laten lopen<br />";//laat de tekst zien
echo "Klaar voor de START...<br />";//laat de tekst zien
for($teller = 5; $teller < 13; $teller++)//begint bij 5 eind bij 13
{
    echo "Dit is rondje $teller <br>";//laat de rondjes zien
}
echo "FINISH...";//laat zien dat hij klaar is
?>
</body>
</html>