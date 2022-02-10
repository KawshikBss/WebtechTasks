<?php
    $num1 = 342;
    $num2 = 23;
    $num3 = 43;

    $lar = $num1;

    if ($num2 > $lar && $num2 > $num3)
        $lar = $num2;
    else if ($num3 > $lar && $num3 > $num2)
        $lar = $num3;
    echo "Largest number is = $lar";
?>
