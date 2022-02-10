<?php
    $arr = array('KB', 'Zilch', 'Chronos');
    $item = 'Zilch';
    $found = false;
    foreach($arr as $el)
    {
        if ($el == $item)
        {
            echo "$item found";
            $found = true;
            break;
        }
    }
    if (!$found)
        echo "$item not found";
?>