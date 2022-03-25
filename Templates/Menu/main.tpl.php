<nav>
        <ul class="navBar">
                <li class="navBarLi">Életfa
                        <?php foreach ($pages as $url => $page) { ?>
                                <?php if(! isset($_SESSION['login']) && 
                                $page['menu'][0]|| isset($_SESSION['login']) && $page['menu'][1]) { ?>
                                        <div class="dropDown_Menu">
                                        <a class="navBarHref"  href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
                                        <?= $page['text'] ?></a>
                                <?php } ?>
                        <?php } ?>
                                        </div>
                </li>
                <li class="navBarLi">Kapcsolat
                        <?php foreach ($contact as $url => $page) { ?>
                                <?php if(! isset($_SESSION['login']) && 
                                $page['menu'][0]|| isset($_SESSION['login']) && $page['menu'][1]) { ?>
                                        <div class="dropDown_Menu">
                                        <a class="navBarHref"  href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
                                        <?= $page['text'] ?></a>
                                <?php } ?>
                        <?php } ?>
                                        </div>
                </li>
                <li class="navBarLi">Programjaink
                <?php foreach ($programs as $url => $page) { ?>
                        <?php if(! isset($_SESSION['login']) && 
                        $page['menu'][0]|| isset($_SESSION['login']) && $page['menu'][1]) { ?>
                                <div class="dropDown_Menu">
                                <a class="navBarHref"  href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
                                <?= $page['text'] ?></a>
                        <?php } ?>
                <?php } ?>
                                </div>
                </li>
                <li class="navBarLi">Galéria
                <?php foreach ($imggallery as $url => $page) { ?>
                        <?php if(! isset($_SESSION['login']) && 
                        $page['menu'][0]|| isset($_SESSION['login']) && $page['menu'][1]) { ?>
                                <div class="dropDown_Menu">
                                <a class="navBarHref"  href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
                                <?= $page['text'] ?></a>
                        <?php } ?>
                <?php } ?>
                                </div>
                </li>
        </ul>
</nav>
<hr>
<div id="content">
<?php include("./Templates/Pages/{$find['file']}.tpl.php");?>
</div>