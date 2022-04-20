<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>

    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
        for ($rank = 8; $rank > 0; $rank--) {
            echo "<tr>";
            echo "<td height=30px width=30px>$rank</td>";
            for ($file = 1; $file <= 8; $file++) {
                $index= $rank + $file;
                if ($index % 2 == 1) {
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                } else {
                    echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
        echo "<tr>";
        $str = 0;
        $char = chr($str);
        echo "<td height=30px width=30px>$char</td>";
        for ($i=0; $i<8; $i++) {
            $str = 65 + $i;
            $char = chr($str);
            echo "<td height=30px width=30px>$char</td>";
        }
        echo "</tr>";
        ?>
    </table>
</body>

</html>