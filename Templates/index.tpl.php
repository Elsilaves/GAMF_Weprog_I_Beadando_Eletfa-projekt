<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php $titleName['title'] ?></title>
</head>
<body>
<header>
        <img src="./Images/<?=$header['logo']?>" alt="<?=$header['logoAlt']?>">
        <div id="navBar">
                <nav>
                        <ul>
                                <li>
                                <?php foreach ($pages as $url => $page) { ?>
			<?php if(! isset($_SESSION['login']) && $page['menu'][0] || isset($_SESSION['login']) && $page['menu'][1]) { ?>
				<li<?= (($page == $find) ? ' class="active"' : '') ?>>
				<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
				<?= $page['text'] ?></a>
				</li>
			<?php } ?>
		<?php } ?>
                                </li>
                        </ul>
                </nav>
        </div>

        <hr>
        <br> <?php print_r($titleName['title'])  ?>
</header>
        

</body>
</html>