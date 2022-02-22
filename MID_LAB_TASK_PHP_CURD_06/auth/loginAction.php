<?php
    if ($_GET['submit'])
    {
        $username = $_GET['username'];
        $pass = $_GET['pass'];
        echo $username . $pass;
    }