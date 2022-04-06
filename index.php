
<?php
include('./Includes/config.inc.php');

//különálló választéklista a menühöz
		if ($url = '/') {
			$find = $pages['/'];
		}elseif ($url = 'con') {
			$find = $contact['con'];
		}elseif ($url = 'prog') {
			$find = $programs['prog'];
		}elseif ($url = 'img') {
			$find = $imggallery['img'];
		}elseif ($url = 'lgn') {
			$find = $login['lgn'];
		}elseif ($url = 'reg') {
			$find = $reg['reg'];
		}

//Oldalak kezelése meühöz
if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./Templates/Pages/{$pages[$_GET['page']]['file']}.tpl.php")) 
		{$find = $pages[$_GET['page']];
	}elseif (isset($contact[$_GET['page']]) && file_exists("./Templates/Pages/{$contact[$_GET['page']]['file']}.tpl.php")) 
		{$find = $contact[$_GET['page']];
	}elseif (isset($programs[$_GET['page']]) && file_exists("./Templates/Pages/{$programs[$_GET['page']]['file']}.tpl.php")) 
		{$find = $programs[$_GET['page']];
	}elseif (isset($imggallery[$_GET['page']]) && file_exists("./Templates/Pages/{$imggallery[$_GET['page']]['file']}.tpl.php")) 
		{$find = $imggallery[$_GET['page']];
	}elseif (isset($login[$_GET['page']]) && file_exists("./Templates/Pages/{$login[$_GET['page']]['file']}.tpl.php")) 
		{$find = $login[$_GET['page']];
	}elseif (isset($reg[$_GET['page']]) && file_exists("./Templates/Pages/{$reg[$_GET['page']]['file']}.tpl.php")) 
		{$find = $reg[$_GET['page']];
	}else if (isset($extras[$_GET['page']]) && file_exists("./Templates/Pages/{$extras[$_GET['page']]['file']}.tpl.php")) 
		{$find = $extras[$_GET['page']];
	}
	else 
	{ 
		$find = $pgnf;header("HTTP/1.0 404 Not Found"); 
	}
}
include('./Templates/index.tpl.php'); 
?>