<!DOCTYPE html>
<html lang="en">
<head>
    <title>GENDER</title>
</head>
<body>
    <?php
        $gender = '';
        if ($_POST)
        {
            if (!empty($_POST['gen']))
            {
                $gender = $_POST['gen'];
            }
            else
                $gender = 'Not selected';
        }
    ?>
    <form action="task4_in_page.php" method="post">
        <fieldset style="width: 20%;">
            <legend>GENDER</legend>
            <input type="radio" name="gen" id="Male" value="Male">
            <label for="Male">Male</label>
            <input type="radio" name="gen" id="Female" value="Female">
            <label for="Female">Female</label>
            <input type="radio" name="gen" id="Other" value="Other">
            <label for="Other">Other</label>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <?php
        echo '<h2>Gender: ' . $gender . '</h2>';
    ?>
</body>
</html>