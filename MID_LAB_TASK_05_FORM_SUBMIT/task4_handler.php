<?php
    if ($_REQUEST)
    {
        echo 'Gender: ';
        if ($_POST)
        {
            if (!empty($_POST['gen']))
            {
                echo$_POST['gen'];
            }
            else
                echo'Not selected';
        }
        else
            echo 'Not selected';
    }
?>
