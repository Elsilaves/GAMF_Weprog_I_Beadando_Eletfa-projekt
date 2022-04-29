<?php 
//A Post metódust helyezi el egy tömbe, amiben a jelzsavakat titkosítja regisztrációnál
$psw = array (
    'Vezeték név'=>$_POST['regFirstName'],
    'Kereszt név'=>$_POST['regLasttName'],
    'E-mail'=>$_POST['regEmail'],
    'Város'=>$_POST['regCity'],
    'Irányítószám'=>$_POST['regPostalcode'],
    'Cím'=>$_POST['regAddress'],
    'Jelszó'=>sha1($_POST['regPassword']),
    'Jelszó megerősítés'=>sha1($_POST['regPasswordCh']));
?>