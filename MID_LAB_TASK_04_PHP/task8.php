<?php
    $arr = array(array(1, 2, 3, 'A'),
                array(1, 2, 'B', 'C'),
                array(1, 'D', 'E', 'F'));

    $rows = 3;
    $cols = 3;
    
    // first shape
    for ($i = 0; $i < $rows; $i++)
    {
        for ($j = 0; $j < $cols - $i; $j++)
        {
            echo $arr[$i][$j];
        }
        echo '<br>';
    }
    //second shape
    for ($i = 0; $i < $rows; $i++)
    {
        for ($j = $cols; $j > $cols - $i - 1; $j--)
        {
            echo $arr[$i][$j];
        }
        echo '<br>';
    }
?>