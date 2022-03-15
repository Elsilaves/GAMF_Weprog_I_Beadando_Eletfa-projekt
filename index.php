<?php
include('./Includes/config.inc.php');

$find = $pages['/'];
$find2 = $contact['contact'];
if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./Templates/Pages/{$pages[$_GET['page']]['file']}.tpl.php")) {$find = $pages[$_GET['page']];
	}
	else if (isset($extras[$_GET['page']]) && file_exists("./Templates/Pages/{$extras[$_GET['page']]['file']}.tpl.php")) {$find = $extras[$_GET['page']];
	}
	else { 
		$find = $pgnf;header("HTTP/1.0 404 Not Found");
	}
}
include('./Templates/index.tpl.php'); 
?>