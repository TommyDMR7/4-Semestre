<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 50;
    $b = 50;
    echo "<table border=10";
    for ($i = 1; $i < $b; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $b; $j++) {
            echo "<td>";
            if ($j%10== 0) {
                echo "x";
            }
            echo $i, " , ", $j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>