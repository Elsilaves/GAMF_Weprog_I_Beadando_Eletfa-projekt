<?php
include('./Includes/config.inc.php');

$find = $pages['/'];
if (isset($_GET['pages'])) {
	if (isset($pages[$_GET['pages']]) && 
            file_exists("./Templates/Pages/
                {$pages[$_GET['page']]['file']}.tpl.php")) {
		$find = $pages[$_GET['page']];
	}
	else if (isset($extras[$_GET['oldal']]) && 
            file_exists("./Templates/Pages/
                {$extras[$_GET['page']]['file']}.tpl.php")) {
		$find = $extras[$_GET['oldal']];
	}
	else { 
		$find = $pgnf;
		header("HTTP/1.0 404 Not Found");
	}
}
include('./Templates/index.tpl.php'); 
?>