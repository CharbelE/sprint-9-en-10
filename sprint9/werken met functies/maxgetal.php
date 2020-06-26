<?php
function maxGetal($getal1, $getal2){//pakt de twee getal die je hebt aangeschreven

    if ($getal1 > $getal2){//als getal 1 groter is dan 2 kiezt hij getal 1
        return($getal1);
    }elseif($getal2 > $getal1){ //als getal 2 groter is dan 1 kiest hij getal 2
        return($getal2);
    }else{// als ze gelijk zijn moet hij gelijk kiezen
        return("gelijk");
    }
}
?>
<form action="" method="post">
    <input type="text" name="eerstegetal"<!-- vraagt voor eerste getal-->
    placeholder="Eerste getal"><br>
    <input type="text" name="tweedegetal"<!-- vraagt voor tweede getal-->
    placeholder="Tweede getal"><br><br>
    <input type="submit" name="submit"<!--klik op submit om de hoogste getal te krijgen-->
    value="Bereken hoogste getal">
    <p>-------------------------------------</p>
</form>
<?php
    if(isset($_POST["submit"])) {// veranderd bijde naar double voor als getal een komma getal heeft
        $input1 = doubleval($_POST["eerstegetal"]);
        $input2 = doubleval($_POST["tweedegetal"]);

            $maxgetal =
                maxGetal($_POST["eerstegetal"], $_POST["tweedegetal"]);
            echo $maxgetal;//het resultaat van de functie maxGetal wordt geprint
        }

?>