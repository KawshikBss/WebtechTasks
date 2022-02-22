<?php
    require_once('../others/accFile.php');
    if (!empty($_POST))
    {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $user = getUser($username);
        if ($user)
        {
            if ($user[3] === $pass)
            {
                setcookie('current_user', $username, time() + 600, '/');
                header('location: ../views/home.php');
            }
            else
                echo 'Invalid Password';
        }
        else
            echo 'invalid Username';
    }
?>