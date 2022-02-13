<?php
    if ($_REQUEST)
    {
        if (isset($_REQUEST["name"]))
            echo "<h1>" . $_REQUEST["name"] . "</h1>";
        else
            echo "<h1>No name submitted</h1>";
    }
?>