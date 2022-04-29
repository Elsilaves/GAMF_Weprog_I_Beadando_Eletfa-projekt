<style>
table, th, td {
    margin: auto;
    padding: 2px;
    border:1px solid black;
    padding: 5px;
}
a{
    position: fixed;
    top: 0;
    right: 0;
}
</style>
<a href="index.php"><input type="submit" value="Vissza a főoldalra"></a>

<?php 
include './Includes/chechPatterns.php';
include './Includes/crypter.php';

if (empty($_POST)) {
    echo "Nincs üzenet";
}
else {
if (!isset($_POST['regFirstName']) || !preg_match($checkPatternFName,$_POST['regFirstName'])){
    exit("A név hossza nem megfelelő: ".$_POST['regFirstName']);
}
if (!isset($_POST['regLasttName']) || !preg_match($checkPatternLName,$_POST['regLasttName'])){
    exit("A név hossza nem megfelelő: ".$_POST['regLasttName']);
}
if (!isset($_POST['regEmail']) || !preg_match($checkPattern,$_POST['regEmail'])){
    exit("A név hossza nem megfelelő: ".$_POST['regEmail']);
}
if (!isset($_POST['regCity']) || !preg_match($checkPatternCity,$_POST['regCity'])){
    exit("A név hossza nem megfelelő: ".$_POST['regCity']);
}
if (!isset($_POST['regPostalcode']) || !preg_match($checkPatternZip,$_POST['regPostalcode'])){
    exit("A név hossza nem megfelelő: ".$_POST['regPostalcode']);
}
if (!isset($_POST['regAddress']) || empty($_POST['regAddress'])){
    exit("A név hossza nem megfelelő: ".$_POST['regAddress']);
}
if (!isset($_POST['regPassword']) || !preg_match($checkPatternPassword,$_POST['regPassword'])){
    exit("A név hossza nem megfelelő: ".$_POST['regPassword']);
}

echo "Regisztráció: ";
echo "<pre>";
var_dump ($psw);
echo "</pre>";
}

include './Includes/regpdo.php';

?>