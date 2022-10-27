<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        fieldset {
            border: 2px solid black;
        }
    </style>
</head>
<body>
<fieldset>
    <legend>lorem50</legend>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo '<form action="zadanie4.php" method="post">
    <textarea name="tekst" id="tekst" cols="50" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam distinctio dolore dolores ea iure minus molestias nisi nobis non nostrum officia perspiciatis placeat quae quas, temporibus tenetur. A accusamus blanditiis, commodi consequuntur cupiditate dolor facilis id impedit itaque iusto, magnam nemo nesciunt nostrum obcaecati omnis possimus quis quos repellendus.
    </textarea><br>
    <button type="submit">Wyślij</button>
    </form>';
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<p>Oto wpisany tekst:</p>";
        echo "<p style='color: red'><i>" . $_POST['tekst'] . "</i></p>";
    }
    ?>
</fieldset>

</body>
</html>
