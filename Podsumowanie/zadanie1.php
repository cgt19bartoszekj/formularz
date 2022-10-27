<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table {
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
    <tr>
<?php
$DNI = array("pon", "wto", "śro", "czw", "pią", "sob", "nie");
foreach ($DNI as $dzien){
    echo "<td>".$dzien."</td>";
}
?>
    </tr>
</table>
</body>
</html>
