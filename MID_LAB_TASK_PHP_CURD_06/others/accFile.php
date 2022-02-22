<?php
    $file_path = '../models/';
    $file_name = 'user.txt';
    function getAllUsers()
    {
        $users = array();
        $file = fopen($file_path + $file_name, 'r');
        echo feof($file);
        /*while (!feof($file))
        {
            $line = fgets($file);
            $user = explode('|', $line);
        }*/
        return $users;
    }
    print_r(getAllUsers());
?>