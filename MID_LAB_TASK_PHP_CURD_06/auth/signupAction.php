<?php
    require_once('../others/accFile.php');
    require_once('../others/idGen.php');
    if (!empty($_POST))
    {
        $username = $_POST['username'];
        $user = getUser($username);
        if ($user)
        {
            echo 'Username in use';
        }
        else
        {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            addUser(array(0 => generateId(), 1 => $username, 2 => $email, 3 => $pass));
            echo '<h1>Successfull</h1><br>';
            echo '<a href="login.html">Login</a>';
        }
    }
?>