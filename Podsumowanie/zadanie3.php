<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table{
            border-collapse: collapse;
        }
td{
    padding: 20px;
    border: 2px solid black;
}
    </style>
</head>
<body>

<table>
    <caption>
        <?php
        $dzien = date("t");
        echo $dzien;
        ?>
    </caption>
    <?php
    echo "<tr>";
    for($i=1; $i<=$dzien; $i++) {
        echo "<td>" . $i . "</td>";
        if (($i % 7) == 0) {
            echo "</tr><tr>";
        }
    }
    ?>
</table>
</body>
</html>