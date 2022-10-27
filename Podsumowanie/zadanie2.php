<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <style>
        fieldset{
            border: 2px solid black;
        }
    </style>
</head>
<body>
<fieldset>
    <legend>Roczniki</legend>
<?php
for ($rok=2010;$rok<=2025;$rok++)
    echo "<label><input type='radio' name='radio'>".$rok."</label><br>"
?>

</fieldset>
</body>
</html>