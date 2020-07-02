<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my age</title>
</head>
<style>
    div {
        background-color: lightyellow;
        height: 280px;
        width: 250px;
        margin: auto;
        border-radius: 5px;
        font-size: 18pt;
        font-family: Palatino Linotype;
    }
</style>
<body>
<div>
    <?php
    $vandaag = date_create("now");//de dag van vandaag
    $geboortedatum = date_create("2001-11-07");//dag dat je bent geboren
    date_format($vandaag, "Y-m-d");
    $interval = date_diff($geboortedatum, $vandaag);
    echo"<br>U ben ". $interval->format("%Y jaren");
    echo$interval->format("<br>%m maanden ");//laat maanden zien
    echo$interval->format("<br>%d dagen");//laat dagen zien
    echo$interval->format("<br>%W weken");//laat weken zien
    echo$interval->format("<br>%H uur");//laat uren zien
    echo$interval->format("<br>%M minuten");//laat minuten zien
    echo$interval->format("<br>%S seconde oud");//laat secondes zien
    ?>
</div>
</body>
</html>