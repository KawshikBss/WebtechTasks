<?php
    require_once('header.php');
    setcookie('current_user', '', time() - 1000, '/');
    header('location: login.html');
?>
