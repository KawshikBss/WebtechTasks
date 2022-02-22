<?php
    if (!isset($_COOKIE['current_user']))
        header('location: ../auth/login.html');
?>