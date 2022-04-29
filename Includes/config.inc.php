<?php
//////////////////////appearance//////////////////////////
$titleName = array( // oldal címe
    'title' => 'Életfa Környezetvédő Szövetség'
);

$header = array(   //fejléc elemei
    'logo' => 'eletfa-u2.png',
    'logiLogo' => 'login.png',
    'loginAlt' => 'login',
    'logoAlt' => 'eletfa-u2',
    'searchLogo' => 'search.png',
    'searchAlt'=>'search',
    'title' => 'Életfa Környezetvédő Szövetség',
    'motto' => ''
);

$footer = array( //lábléc elemei
    'copyrights' => 'Copyright '.date("Y"."."),
    'company' => 'Életfa Környezetvédő Szövetség'
);

/////////////////////page arrays///////////////////////////
$pgnf = array( //Nemtalálható oldalakhoz szökséges tömbe.
    'file' => '404', 'text' => 'A keresett oldal nem található!'
);

$pages = array( // Főmenü oldalainak tömbje
    '/' => array('file' => 'introduction', 'text' => 'Bemutatkozás', 'menu' => array(1,1)),
    'eticalCodex' => array('file' => 'eticalCodex', 'text' => 'Etikai Kódex', 'menu' => array(1,1)),
    'schoolCommunityService' => array('file' => 'schoolCommunityService', 'text' => 'Iskolai Közösségi Szolgálat', 'menu' => array(1,1)),
    'publicBenefitReports' => array('file' => 'publicBenefitReports', 'text' => 'Közhasznűsági Beszámolóink', 'menu' => array(1,1)),
    'mission' => array('file' => 'mission', 'text' => 'Küldetésünk', 'menu' => array(1,1)),
    'strategy' => array('file' => 'strategy', 'text' => 'Stratégia', 'menu' => array(1,1)),
    'management' => array('file' => 'management', 'text' => 'Tagjaink, Vezetőség', 'menu' => array(1,1)),
    'story' => array('file' => 'story', 'text' => 'Életfa Története', 'menu' => array(1,1)),
    'policy' => array('file' => 'policy', 'text' => 'Adatkezelési Szabályzat és Tájékoztató', 'menu' => array(1,1)),
);

$contact = array( //kapcsolat oldalainak tömbje
    'con' => array('file' => 'contact', 'text' => 'Lakossági bejelentés', 'menu' => array(1,1)),
    'atnblty' => array('file' => 'atnblty', 'text' => 'Elérhetőségek', 'menu' => array(1,1)),
);

$programs = array ( //programok oldalainak tömbje
    'EFOP' => array('file' => 'EFOP', 'text' => 'EFOP-5.2.2 - Civil Hálózatok Közép-Európában', 'menu' => array(1,1)),
    'CSR' => array('file' => 'CSR', 'text' => 'Társadalmi Szerepvállalás - CSR', 'menu' => array(1,1)),
    '=' => array('file' => '=', 'text' => 'Élet=Fa - Közösségi Faültetés', 'menu' => array(1,1)),
);

$imggallery = array ( // képgaléria oldalainak tömbje
    'img' => array('file' => 'img', 'text' => 'Képek', 'menu' => array(1,1)),
   // 'imgupld' => array('file' => 'imgupld', 'text' => 'Képfeltöltés', 'menu' => array(0,1)),
);

$login = array ( // bejelentkezési oldal tömbje
    'lgn' => array('file' => 'lgn', 'text' => 'Bejelentkezés', 'menu' => array(1,1)),
);

$reg = array ( //regisztrációs oldal tömbje
    'reg' => array('file' => 'reg', 'text' => 'Regisztráció', 'menu' => array(1,1)),
);

$DataFromDb = array ( // oldal az adatbázisból kinyert adatok mejelenítéséhez
    'DataFromDb' => array('file' => 'DataFromDb', 'text' => 'Táblázat', 'menu' => array(0,1)),
);

///image gallery upload/////////////////////////////
$folder = './ImageGallery/'; //Mappa a kép feltöltéshez
$types = array('.jpg','.png'); //képek formai követelménye
$mediaTypes = array('image/jpeg','image/png'); //képek típus követelménye
$datetpl = "Y.m.d. H:i"; // Dátum formai megjelenítéséhez
$imgMaxSize = 500*1024; //kép maximális méretének meghatározása 
?>

