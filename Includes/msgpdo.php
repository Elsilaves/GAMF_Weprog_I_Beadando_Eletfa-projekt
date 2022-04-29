<?php
include './Includes/pdo.ini.php';

try {

    /*"A PDO (PHP Data Object) osztály a PHP-be beépített adatbáziskezelő osztálykönyvtár, 
    melynek segítségével biztonságos, objektumorientált módon kezelhetjük az adatbázisainkat a PHP-n belül." */
    $msgdbcon = new PDO( //PDO adatbázis kapcsolat 
        "mysql:host=$host;",
        $user, 
        $password);
        $msgdbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$msgdbcon->query('SET NAMES utf8 COLLATE utf8_hungarian_ci'); //ékezetes karakterek kezelése

// Üzenetküldés esetén automatikusan létrehozza a szükséges adatbázist amenniyben nem létezik és kapcsolódik az adatbázis kezelőhöz.
$createdb = "CREATE DATABASE IF NOT EXISTS Ganf_Beadando_Eletfa;
USE Ganf_Beadando_Eletfa;";
$msgdbcon-> exec($createdb);

// Üzenetküldés esetén automatikusan létrehozza a szükséges relációs adattáblázatot amenniyben nem létezik és kapcsolódik az adatbázis kezelőhöz.

$redDborder ="CREATE table IF NOT EXISTS Uzenetek(
ID INT NOT NULL AUTO_INCREMENT , 
nev VARCHAR(50) NOT NULL , 
email VARCHAR(40) NOT NULL , 
targy VARCHAR(40) NOT NULL , 
uzenet VARCHAR(500) NOT NULL , 
datum VARCHAR(10) NOT NULL,
ido VARCHAR(8) NOT NULL,
PRIMARY KEY (`ID`)
);";

$msgdbcon-> exec($redDborder);

// Amenniyben a POST metódus nem üres értékű, úgy beilleszti az Users Táblázatba az értékeket
if (!empty($_POST)) {
    $redDborder = "INSERT INTO Uzenetek(
        nev,
        email,
        targy,
        uzenet,
        datum,
        ido) 
        VALUES(?,?,?,?,?,?)"; //Helytartó étékek
}
$time = new DateTime("now", new DateTimeZone('Europe/Budapest')); //A dátum és idő rögzítéséhez előkészített változó, ami az időt Budapesti időzóna szerint rögzíti.

$msgdbcon-> prepare($redDborder)->execute([ 
    $_POST['name'],
    $_POST['email'], 
    $_POST['subject'],
    $_POST['msg'],
    date("Y-m-d"),
    $time->format('H:i:s')
]);
//echo "Az adatbázishoz kapcsolódás sikeres!". "<br>";

// Az adatbázisban rögzített üzeneteket írja ki táblázat formában rögzítést követően
$msgstmsg = $msgdbcon->query("SELECT * FROM Uzenetek
ORDER BY ID DESC");
    echo 
    "<table>".
    "<tr>
    <th>ID</th>
    <th>Név</th>
    <th>Email cím</th>
    <th>Tárgy</th>
    <th>Üzenet</th>
    <th>Dátum</th>
    <th>Idő</th>";
        while ($msgRow = $msgstmsg->fetch()) {
    echo  
    "<tr>".
    "<td>".
    $msgRow ['ID']."</td>".
    "<td>".
    $msgRow ['nev']." ".
    "</td>".
    "<td>".
    $msgRow ['email'].
    "</td>".
    "<td>".
    $msgRow ['targy'].
    "</td>".
    "<td>".
    $msgRow ['uzenet'].
    "</td>".
    "<td>".
    $msgRow['datum'].
    "</td>".
    "<td>".
    $msgRow['ido'].
    "</td>".
    "</tr>";
}
echo "
</tr>
</table><br>"
;

} catch (PDOException $e) { //Hibakezelés
    echo "Az adatbázishoz nem lehetett csatlakozni: :" . $e->getMessage();
}
?>