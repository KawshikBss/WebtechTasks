<?php
    function getAllUsers()
    {
        $file_path = '../models/user.txt';
        $file = fopen($file_path, 'r');
        $users = array();
        while (!feof($file))
        {
            $line = fgets($file);
            $user = explode('|', $line);
            $users[$user[1]] = $user;
        }
        fclose($file);
        return $users;
    }
    function getUser($name)
    {
        $users = getAllUsers();
        if (isset($users[$name]))
            return $users[$name];
        return false;
    }
    function addUser($user)
    {
        $file_path = '../models/user.txt';
        $file = fopen($file_path, 'a');
        $data = implode('|', $user);
        fwrite($file, $data);
        fclose($file);
    }
    addUser(array(0 => generateId(), 1 => $username, 2 => $email, 3 => $pass));
?>