<?php
include './Includes/pdo.ini.php';

if (isset($_POST['userName']) && isset($_POST['lgnPsw'])) {

try {
    $lgnbcon = new PDO(
        "mysql:host=$host;
        dbname=$db",
        $user, 
        $password);
        $lgnbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $lgnbcon->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

$sqlSelect = "SELECT ID, vezetek_nev,kereszt_nev FROM Users 
WHERE email=:email AND reg_jelszo = :reg_jelszo";


$seth=$lgnbcon->prepare($sqlSelect);

$seth->execute(array(':email' => $_POST['userName'], ':reg_jelszo'=>sha1($_POST['lgnPsw'])));


$lgnrow=$seth->fetch(PDO::FETCH_ASSOC);

        echo "Az adatbázishoz kapcsolódás sikeres!". "<br><br>";
    } catch (PDOException $e) {
        echo "Az adatbázishoz nem lehetett csatlakozni: :" . $e->getMessage();
    }
}
    ?>
        <?php if (isset($lgnrow)) {?>
        
        <?php if ($lgnrow) {?>
            <h1>Bejelentkezett: </h1>
            Azonosító: <strong><?php echo $lgnrow['ID']?></strong><br><br>
            Név: <strong><?php echo $lgnrow['vezetek_nev']." ".$lgnrow['kereszt_nev']?></strong>
            <?php } else {?>
            <h1>A bejelentkezés nem sikerült!</h1>
            <a href="/Templates/Pages/lgn.tpl.php">Bejelentkezés újra</a>
            <?php }?>
        <?php }?>