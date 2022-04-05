<?php 
if (!isset($_POST['name']) || strlen($_POST['name'])<6){
    exit("A név hossza nem megfelelő: ".$_POST['name']);
}
$cSCh = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
if (!isset($_POST['email']) || !preg_match($cSCh ,$_POST['email'])){
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
?>

