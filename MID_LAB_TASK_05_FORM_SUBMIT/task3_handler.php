<?php
    if ($_REQUEST)
    {
        if (isset($_REQUEST['dd']) && isset($_REQUEST['mm']) && isset($_REQUEST['yyyy']))
        {
            echo "Date of birth is: " . $_REQUEST['dd'] . "/ " . $_REQUEST['mm'] . "/ " . $_REQUEST['yyyy'];
        }
    }
?>
