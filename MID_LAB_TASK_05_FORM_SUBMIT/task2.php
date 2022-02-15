<!DOCTYPE html>
<html lang="en">
<head>
    <title>EMAIL</title>
</head>
<body>
    <?php
        $email = '';
        if ($_REQUEST)
        {
            if (isset($_REQUEST["email"]))
                $email = $_REQUEST["email"];
        }
    ?>
    <form action="task2.php" method="post">
        <fieldset style="width: 20%;">
            <legend>EMAIL</legend>
            <input type="text" name="email" value=<?php echo $email ?>>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <h2><?php echo $email ?></h2>
</body>
</html>