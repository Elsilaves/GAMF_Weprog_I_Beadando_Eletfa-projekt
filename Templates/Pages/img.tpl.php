<div class="content">
<?php
$pictures = array();
$imgReader = opendir($folder);

while (($imgFile = readdir($imgReader))!==false) {
    if (is_file($folder.$imgFile)) {
        $endReader = strtolower(substr($imgFile, strlen($imgFile)-4));
        if (in_array($endReader, $types)) {
            $pictures[$imgFile] = filemtime($folder.$imgFile);
        }
    }
}closedir($imgReader);

arsort($pictures);

foreach($pictures as $imgFile => $date){
?>
    <div class="picture"> 
        <a href="<?php echo $folder.$imgFile;?>">
            <img class="img" src="<?php echo $folder.$imgFile; ?>" alt="<?php echo $imgFile;?>">
        </a>
        <p>Név: <?php echo $imgFile;?></p>
        <p>Dátum: <?php echo date($datetpl,$date); ?></p>
    </div>
<?php 
} 
?>
</div>

<?php
?>

<input class="uploadbtn" type="button" onclick="location.href='imgupld.tpl.php'" value="Kép feltöltése">
