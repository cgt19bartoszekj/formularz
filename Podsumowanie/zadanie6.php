<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <style>
        label{
            margin-right: 15px;
        }
        fieldset{
            border: 2px solid blue;
        }
    </style>
</head>
<body>
<fieldset>
    <legend>Alfabet</legend>
    <form action="zadanie6.php" method="post">
<?php
foreach (range('a', 'z') as $letter) {
    echo '<label><input name="litera[]" value="'.$letter.'" type=checkbox>'.$letter.'</label>';
}
?>
        <br>
        <button type="submit">Wybierz</button>

    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        if(!empty($_POST['litera'])) {
            echo '<br>Te litery zostały wybrane: ' . implode(",", $_POST['litera']).'<br>';
        }
        else{
            echo '<br>Żadna litera nie została wybrana<br>';
        }
    }
    ?>
    <br>
</fieldset>
</body>
</html>
