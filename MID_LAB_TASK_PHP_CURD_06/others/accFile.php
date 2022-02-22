<?php
    function getAllUsers()
    {
    $file_path = '../models/user.txt';
        $users = array();
        $file = fopen($file_path, 'r');
        while (!feof($file))
        {
            $line = fgets($file);
            $user = explode('|', $line);
            $users[$user[1]] = $user;
        }
        return $users;
    }
    function getUser($name)
    {
        $users = getAllUsers();
        if (isset($users[$name]))
            return $users[$name];
        return NULL;
    }
?>