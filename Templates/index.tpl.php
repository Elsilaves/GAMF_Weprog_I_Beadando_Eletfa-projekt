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
        <div id="navBar">
                <nav>
                <ul class="navBar">
                        <li class="navBarLi">Életfa
                                <?php foreach ($pages as $url => $page) { ?>
			<?php if(! isset($_SESSION['login']) && $page['menu'][0]|| isset($_SESSION['login']) && $page['menu'][1]) { ?>
                                <div class="dropDown_Menu">
				<a class="navBarHref"  href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
				<?= $page['text'] ?></a>  
			<?php } ?>
		<?php } ?>
                                </div>
                                </li>
                <li class="navBarLi">Kapcsolat
                <?php foreach ($contact as $url => $page) { ?>
			<?php if(! isset($_SESSION['login']) && $page['menu'][0]|| isset($_SESSION['login']) && $page['menu'][1]) { ?>
                                <div class="dropDown_Menu">
				<a class="navBarHref"  href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
				<?= $page['text'] ?></a>  
			<?php } ?>
		<?php } ?>
                                </div>
                </li>
                <li class="navBarLi">Programjaink</li>
                        </ul>
                </nav>
        <hr>
        <div id="content">
                <?php include("./Templates/Pages/{$find['file']}.tpl.php");?>
        </div>
</header>
        

</body>
</html>