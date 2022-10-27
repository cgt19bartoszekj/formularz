<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$miesiac = array("styczen"=>"Styczeń", "luty"=>"Luty", "marzec"=>"Marzec", "kwiecien"=>"Kwiecień", "maj"=>"Maj", "czerwiec"=>"Czerwiec", "lipiec"=>"Lipiec", "sierpien"=>"Sierpień", "wrzesien"=>"Wrzesień", "pazdziernik"=>"Październik", "listopad"=>"Listopad", "grudzien"=>"Grudzień");
$klucz = array_keys($miesiac);
?>
<select>
    <?php

    for($i=0; $i<count($miesiac); $i++){
        if($i+1== date('m')){
            $selected = "selected";
        }
        else{
            $selected = "";
        }
        echo '<option '.$selected.' value="'.$klucz[$i].'">'.$miesiac[$klucz[$i]].'</option>';
    }
    ?>
</select>
</body>
</html>