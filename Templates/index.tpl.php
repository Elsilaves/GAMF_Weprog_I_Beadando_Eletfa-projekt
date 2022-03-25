<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php $titleName['title'] ?></title>
        <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
<header>
        <img src="./Images/<?=$header['logo']?>" alt="<?=$header['logoAlt']?>">
        <div class="searchBar">
        <input type="text" placeholder="Keresés...">
        <img class="searchLogo" src="./Images/<?=$header['searchLogo']?>" alt="<?=$header['searchAlt']?>">
        </div>
</header>
<?php include('./Templates/Menu/main.tpl.php')?>
</body>
</html>

