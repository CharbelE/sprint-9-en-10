<?php
function Fibonacci($n)//voerd dit 20 keer om 20 fibonacci nummers te krijgen
{
    $num1 = 0;
    $num2 = 1;
    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}
$n = 20;//geeft aan dat ik het 20 keer wil
echo Fibonacci($n);//laat ze zien
?>