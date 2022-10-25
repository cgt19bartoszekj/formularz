<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$login = $email = $strona = $miasto = $plec = "";
$loginError = $emailError = $stronaError = $miastoError = $plecError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Login"]))
        $loginError = "Login jest wymagany";
    else $login = $_POST["Login"];
    if (empty($_POST["Email"]))
        $emailError = "Email jest wymagany";
    else $email = $_POST["Email"];
    if (empty($_POST["Strona"]))
        $stronaError = "Strona jest wymagana";
    else $strona = $_POST["Strona"];
    if (empty($_POST["Miasto"]))
        $miastoError = "Miasto jest wymagane";
    else $miasto = $_POST["Miasto"];
    if (empty($_POST["plec"]))
        $plecError = "Płeć jest wymagana";
    else $plec = $_POST["plec"];
}
?>
<form method="post" action="formularz.php">
    <fieldset>
        <legend>
            Formularz z walidacją
        </legend>
        <label for="Login">Login:</label><span style="color:red">* <?= $loginError ?> </span><br>
        <input name="Login" id="Login" value="<?= $login ?>"><br><br>
        <label for="Email">Email:</label><span style="color:red">*<?= $emailError ?></span><br>
        <input name="Email" id="Email" value="<?= $email ?>"><br><br>
        <label for="Strona">Strona internetowa:</label><span style="color:red">*<?= $stronaError ?></span><br>
        <input name="Strona" id="Strona" value="<?= $strona ?>"><br><br>
        <label for="Miasto">Wybierz miasto/miasta:</label><span style="color:red">*<?= $miastoError ?></span><br>
        <select size="4" multiple name="Miasto[]" id="Miasto">
            <option value="Warszawa"
            <?php if($miasto && strstr(implode(' ',$miasto), "Warszawa")) echo 'selected'; ?>>Warszawa</option>
            <option value="Poznań"
                <?php if($miasto && strstr(implode(' ',$miasto), "Warszawa")) echo 'selected'; ?>>Poznań</option>
            <option value="Gdańsk"
                <?php if($miasto && strstr(implode(' ',$miasto), "Warszawa")) echo 'selected'; ?>>Gdańsk</option>
            <option value="Szczecin"
                <?php if($miasto && strstr(implode(' ',$miasto), "Warszawa")) echo 'selected'; ?>>Szczecin</option>
        </select><br><br>
        <label for="plec">Wybierz jedną opcję:</label><span style="color:red">*<?= $plecError ?></span><br>
        <input id="plec" name="plec[]" type="checkbox" value="kobieta">kobieta<br>
        <input id="plec" name="plec[]" type="checkbox" value="mężczyzna">mężczyzna<br>
        <input id="plec" name="plec[]" type="checkbox" value="nie chcę podawać">nie chcę podawać<br><br>
        <button type="submit">Wyślij</button>
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['Login']))
        echo "Login: " . $_POST['Login'] . "<br>";
    else
        echo "Login nie podany" . "<br>";

    if (!empty($_POST['Email']))
        echo "Email: " . $_POST['Email'] . "<br>";
    else
        echo "Email nie podany" . "<br>";

    if (!empty($_POST['Strona']))
        echo "Strona internetowa: " . $_POST['Strona'] . "<br>";
    else
        echo "Strona internetowa nie podana" . "<br>";

    if (!empty($_POST['Miasto']))
        echo "Miasto: " . implode(', ', $_POST['Miasto']) . "<br>";
    else
        echo "Miasto nie podane" . "<br>";
    if (!empty($_POST['plec']))
        echo "Płeć: " . implode(', ', $_POST['plec']);
    else
        echo "Płeć nie podana" . "<br>";
}
?>
</body>
</html>
