<link rel="stylesheet" href="Styles/styles.css">
<?php
include('./Includes/config.inc.php');
$imgupld = array();

if(isset($_POST['send'])) {
    foreach ($_FILES as $imgFile) {
    if ($imgFile['error']==4);
    elseif (!in_array($imgFile['type'],$mediaTypes))
        $imgupld[]="Nem megfelelő típus: ".$imgFile['name'];
    elseif ($imgFile['error']==1 
            or $imgFile['error']==2
            or $imgFile['size']>$imgMaxSize)
        $imgupld[]="Túl nagy fájl: ".$imgFile['name'];
    else {
            $upldfldr = $folder.strtolower($imgFile['name']);
    if (file_exists($upldfldr))
        $imgupld[]="Már létezik ilyen fájl: ".$imgFile['name'];
    else {
        move_uploaded_file($imgFile['tmp_name'],$upldfldr);
        $imgupld[]="OK: ".$imgFile['name'];
            }
        }
    }
}
if (!empty($imgFile)) {
    echo '<ul>'; foreach($imgupld as $u)
    echo "<li>$u</li>"; echo '</ul>';
}
?>

<h1>Kép feltöltés a galériába</h1>

<form action="./imgupld.tpl.php" method="POST" enctype="multipart/form-data">
<label>1. kép:
<input type="file" name="#1" required> </label>
<label>2. kép:
<input type="file" name="#2"> </label>
<label>3. kép:
<input type="file" name="#3"> </label>
<input type="submit" name="send">
</form>
