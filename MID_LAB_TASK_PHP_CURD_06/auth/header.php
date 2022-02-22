<?php
    if (!isset($_COOKIE['current_user']))
        header('location: login.php');
?>