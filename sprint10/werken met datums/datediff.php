<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    Datum 1: <input type="date" name="datum-1"><br>
    Datum 2: <input type="date" name="datum-2"><br>
    <input type="submit" name="submit">
</form>

<?php
datediff($_POST['datum-2'],$_POST['datum-1']);
function datediff($datum1, $datum2){
    $datum1 = date_create($datum1);//hier word de eerste opgegeven datum bijgehouden
    $datum2 = date_create($datum2);//en hier word de tweede opgegeven datum bijgehouden
    $interval = date_diff($datum1, $datum2);//hier word de verschil berekend van de twee datums
    echo $interval->format("Dagen verschil: %a");//hier schrijft die het uitkomst uit
}

?>
</body>
</html>