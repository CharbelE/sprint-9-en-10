<?php
//deze function reiskosten gebruken we om de kosten tussen twee bestemmingen te berekenen
function reiskosten($vertrek, $bestemming)
{
    $reiskosten = array();
    $reiskosten[1] = array();
    $reiskosten[2] = array();
    $reiskosten[3] = array();
    $reiskosten[4] = array();
    $reiskosten[1][1] = 0;
    $reiskosten[1][2] = 30;
    $reiskosten[1][3] = 60;
    $reiskosten[1][4] = 90;
    $reiskosten[2][1] = 30;
    $reiskosten[2][2] = 0;
    $reiskosten[2][3] = 40;
    $reiskosten[2][4] = 20;
    $reiskosten[3][1] = 60;
    $reiskosten[3][2] = 40;
    $reiskosten[3][3] = 0;
    $reiskosten[3][4] = 10;
    $reiskosten[4][1] = 90;
    $reiskosten[4][2] = 20;
    $reiskosten[4][3] = 10;
    $reiskosten[4][4] = 0;
    return($reiskosten[$vertrek][$bestemming]);
}
?>
<h4>Reiskosten</h4>

<form action="" method = "post">
    vertrek:
    <select name="vertrek"><!--selecteer een van de 4 van waar je vertrekt-->
        <option value="1">Amsterdam</option>
        <option value="2">Utrecht</option>
        <option value="3">Den Haag</option>
        <option value="4">Rotterdam</option>
    </select>
    bestemming:
    <select name="bestemming"><!--selecteer een van de 4 van waar je naar toe wilt gaan-->
        <option value="1">Amsterdam</option>
        <option value="2">Utrecht</option>
        <option value="3">Den Haag</option>
        <option value="4">Rotterdam</option>
    </select><br><br>
    <input type="submit" name="submit" value="Berekenen"><!--door op berekenen te klikken gaat die uitrekenen wat de kosten zijn-->
    <p>-------------------------------------</p>
</form>
<?php
if(isset($_POST["bestemming"]) && isset($_POST["vertrek"])) {
    $reiskosten = reiskosten($_POST["vertrek"], $_POST["bestemming"]);//hier haalt hij beide van vertrek en bestemming samen om te kijken welke van de 16 hij moet pakken
    echo "De berekende reiskosten zijn: $reiskosten euro";//hier laat hij zien wat het kost
}
?>