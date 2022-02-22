<?php
    require_once('../auth/header.php');
?>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Wellcome Back <?php $_COOKIE['current_user'] ?></h1>
        <br>
        <ul>
            <li>
                <a href="../auth/logout.php">Logout</a>
            </li>
            <li>
            <a href="userList.php">Users List</a>
            </li>
        </ul>
    </body>
</html>