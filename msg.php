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
if (empty($_POST)) {
    echo "Nincs üzenet";
}
else {
if (!isset($_POST['name']) || !preg_match($checkPatternFName,$_POST['name'])){
    exit("A név hossza nem megfelelő: ".$_POST['name']);
}
if (!isset($_POST['email']) || !preg_match($checkPattern ,$_POST['email'])){
    exit("Hibás e-mail cím: ".$_POST['email']);
}
if (!isset($_POST['subject']) || empty($_POST['subject'])){
    exit("Nincs tárgy:  ".$_POST['subject']);
}
if (!isset($_POST['msg']) || empty($_POST['msg'])){
    exit("Nincs üzenet:  ".$_POST['msg']);    
}
echo "Üzenet: ";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
}
include './Includes/msgpdo.php';
?>