<html>
    <body>
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <td>
                    <?php
                        $cols = 3;
                        $rows = 3;
                        for ($i = 0; $i < $rows; $i++)
                        {
                            for ($j = 0; $j < $i + 1; $j++)
                                echo '*';
                            echo '<br>';
                        }
                    ?>
                </td>
                <td>
                    <?php
                        for ($i = $rows; $i > 0; $i--)
                        {
                            for ($j = 0; $j < $i; $j++)
                                echo $j + 1;
                            echo '<br>';
                        }
                    ?>
                </td>
                <td>
                    <?php
                        $vals = array('A', 'B', 'C', 'D', 'E', 'F');
                        for ($i = 0; $i < $rows; $i++)
                        {
                            for ($j = 0; $j < $i + 1; $j++)
                                if ($i == 2)
                                    echo $vals[$i + $j + 1];
                                else
                                    echo $vals[$i + $j];
                            echo '<br>';
                        }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>