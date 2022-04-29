<?php
include './Includes/pdo.ini.php'; // Adatbázis kapcsolathoz szükséges változók meghívása

if (isset($_POST['regFirstName']) 
&& isset($_POST['regLasttName'])
&& isset($_POST['regEmail'])
&& isset($_POST['regCity'])
&& isset($_POST['regPostalcode'])
&& isset($_POST['regAddress'])
&& isset($_POST['regPassword'])){

/*"A PDO (PHP Data Object) osztály a PHP-be beépített adatbáziskezelő osztálykönyvtár, 
    melynek segítségével biztonságos, objektumorientált módon kezelhetjük az adatbázisainkat a PHP-n belül. "*/

try {
    $dbcon = new PDO( //PDO adatbázis kapcsolat 
        "mysql:host=$host;",
        $user, 
        $password);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbcon->query('SET NAMES utf8 COLLATE utf8_hungarian_ci'); //ékezetes karakterek kezelése

// Regisztráció esetén automatikusan létrehozza a szükséges adatbázist amenniyben nem létezik és kapcsolódik az adatbázis kezelőhöz.

$createdb = "CREATE DATABASE IF NOT EXISTS Ganf_Beadando_Eletfa;
USE Ganf_Beadando_Eletfa;";
$dbcon -> exec($createdb);

// Regisztráció esetén automatikusan létrehozza a szükséges relációs adattáblázatot amenniyben nem létezik és kapcsolódik az adatbázis kezelőhöz.

$redDborder ="CREATE TABLE IF NOT EXISTS Ganf_Beadando_Eletfa.Users
(ID INT NOT NULL AUTO_INCREMENT , 
vezetek_nev VARCHAR(28) NOT NULL ,
kereszt_nev VARCHAR(27) NOT NULL , 
email VARCHAR(40) NOT NULL , 
varos VARCHAR(60) NOT NULL,
iranyitoszam VARCHAR(5) NOT NULL,
cim VARCHAR(100) NOT NULL,
reg_jelszo VARCHAR(40) NOT NULL ,
datum VARCHAR(10) NOT NULL,
ido VARCHAR(8) NOT NULL,
PRIMARY KEY (`ID`),
UNIQUE(`reg_jelszo`,`email`));";

$dbcon-> exec($redDborder);


// Amenniyben a POST metódus nem üres értékű, úgy beilleszti az Users Táblázatba az értékeket
if (!empty($_POST)) {
    $redDborder = "INSERT INTO Users(
        vezetek_nev,
        kereszt_nev,
        email,
        varos,
        iranyitoszam,
        cim,
        reg_jelszo,
        datum,
        ido) 
        VALUES(?,?,?,?,?,?,?,?,?)";
}

$time = new DateTime("now", new DateTimeZone('Europe/Budapest')); //A dátum és idő rögzítéséhez előkészített változó, ami az időt Budapesti időzóna szerint rögzíti.

// echo "Az adatbázishoz kapcsolódás sikeres!". "<br>";

// A regisztrációs űrlap jelszavának titkosításához az adatbázisba történő mentésnél.
$dbcon-> prepare($redDborder)->execute([ 
    $_POST['regFirstName'],
    $_POST['regLasttName'], 
    $_POST['regEmail'],
    $_POST['regCity'],
    $_POST['regPostalcode'],
    $_POST['regAddress'],
    sha1($_POST['regPassword']),
    date("Y-m-d"),
    $time->format('H:i:s')
]);

// Az adatbázisban rögzített üzeneteket írja ki táblázat formában rögzítést követően
$regstmsg = $dbcon->query("SELECT * FROM Users
ORDER BY ID DESC");
    echo 
    "<table>".
    "<tr>
    <th>ID</th>
    <th>Név</th>
    <th>Email cím</th>
    <th>Cím</th>
    <th>Jelszó</th>
    <th>Dátum</th>
    <th>Idő</th>";
        while ($regRow = $regstmsg->fetch()) {
    echo  
    "<tr>".
    "<td>".
    $regRow['ID']."</td>".
    "<td>".
    $regRow['vezetek_nev']." ".
    $regRow['kereszt_nev'].
    "</td>".
    "<td>".
    $regRow['email'].
    "</td>".
    "<td>".
    $regRow['iranyitoszam']." ".
    $regRow['varos'].", ".
    $regRow['cim'].
    "</td>".
    "<td>".
    $regRow['reg_jelszo'].
    "</td>".
    "<td>".
    $regRow['datum'].
    "</td>".
    "<td>".
    $regRow['ido'].
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
}
?>