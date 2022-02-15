<!DOCTYPE html>
<html lang="en">
<head>
    <title>GENDER</title>
</head>
<body>
    <?php
        $gender = '';
        $genders = array('Male' => fasle, 'Female' => fasle, 'Other' => fasle);
        if (!empty($_POST['gen']))
        {
            $gender = $_POST['gen'];
            $genders[$gender] = true;
        }
        else
            $gender = 'Not selected';
    ?>
    <form action="task4_in_page.php" method="post">
        <fieldset style="width: 20%;">
            <legend>GENDER</legend>
            <input type="radio" name="gen" id="Male" value="Male" checked=<?php if($genders['Male']==true){ echo "checked";}?>>
            <label for="Male">Male</label>
            <input type="radio" name="gen" id="Female" value="Female" checked=<?php if($genders['Female']==true){ echo "checked";}?>>
            <label for="Female">Female</label>
            <input type="radio" name="gen" id="Other" value="Other" checked=<?php if($genders['Other']==true){ echo "checked";}?>>
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