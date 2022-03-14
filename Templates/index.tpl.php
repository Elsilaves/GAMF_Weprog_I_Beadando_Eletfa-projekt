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
        <div id="navBar">
                <nav>
                        <ul class="navBar">
                                <?php foreach ($pages as $url => $page) { ?>
			<?php if(! isset($_SESSION['login']) && $page['menu'][0] || isset($_SESSION['login']) && $page['menu'][1]) { ?>
				<li <?= (($page == $find) ? ' class="navBarLi"' : '') ?>> Életfa
                                <div class="dropDown_Menu">
				<a class="navBarHref"  href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
				<?= $page['text'] ?></a>        
                                </div>
				</li>
                                <li class="navBarLi">Kapcsolat</li>
                                <li class="navBarLi">Programjaink</li>
			<?php } ?>
		<?php } ?>
                        </ul>
                </nav>
        </div>
        <hr>
        <div id="content">
                <?php include("./Templates/Pages/{$find['file']}.tpl.php");?>
        </div>
</header>
        

</body>
</html>