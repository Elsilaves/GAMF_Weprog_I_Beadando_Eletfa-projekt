<?php
//////////////////////appearance//////////////////////////
$titleName = array(
    'title' => 'Életfa Környezetvédő Szövetség'
);

$header = array(
    'logo' => 'eletfa-u2.png',
    'logiLogo' => 'login.png',
    'loginAlt' => 'login',
    'logoAlt' => 'eletfa-u2',
    'searchLogo' => 'search.png',
    'searchAlt'=>'search',
    'title' => 'Életfa Környezetvédő Szövetség',
    'motto' => ''
);

$footer = array(
    'copyrights' => 'Copyright '.date("Y"."."),
    'company' => 'Életfa Környezetvédő Szövetség'
);

/////////////////////page arrays///////////////////////////
$pgnf = array(
    'file' => '404', 'text' => 'A keresett oldal nem található!'
);

$pages = array(
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

$contact = array(
    'con' => array('file' => 'contact', 'text' => 'Lakossági bejelentés', 'menu' => array(1,1)),
    'atnblty' => array('file' => 'atnblty', 'text' => 'Elérhetőségek', 'menu' => array(1,1)),
);

$programs = array (
    'EFOP' => array('file' => 'EFOP', 'text' => 'EFOP-5.2.2 - Civil Hálózatok Közép-Európában', 'menu' => array(1,1)),
    'CSR' => array('file' => 'CSR', 'text' => 'Társadalmi Szerepvállalás - CSR', 'menu' => array(1,1)),
    '=' => array('file' => '=', 'text' => 'Élet=Fa - Közösségi Faültetés', 'menu' => array(1,1)),
);

$imggallery = array (
    'img' => array('file' => 'img', 'text' => 'Képek', 'menu' => array(1,1)),
   // 'imgupld' => array('file' => 'imgupld', 'text' => 'Képfeltöltés', 'menu' => array(1,1)),
);

$login = array (
    'lgn' => array('file' => 'lgn', 'text' => 'Bejelentkezés', 'menu' => array(1,1)),
);

$reg = array (
    'reg' => array('file' => 'reg', 'text' => 'Regisztráció', 'menu' => array(1,1)),
);

///image gallery upload/////////////////////////////
$folder = './ImageGallery/';
$types = array('.jpg','.png');
$mediaTypes = array('image/jpeg','image/png');
$datetpl = "Y.m.d. H:i";
$imgMaxSize = 500*1024;
?>

