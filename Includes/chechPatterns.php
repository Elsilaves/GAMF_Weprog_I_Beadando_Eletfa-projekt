<?php
$checkPattern = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
$checkPatternFName='/^[A-Z-À-Ű-]\d*[a-z-á-ű-].{1,25}[\S*]$/';
$checkPatternPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{5,35}$/';
$checkPatternLName  = '/^[A-Z-À-Ű-]\d*[a-z-á-ű-]{1,25}[\S*]$/';
$checkPatternZip = '/^(?=.*[0-9]).{4,5}$/';
$checkPatternCity = '/^[A-Z-À-Ű-]\d*[a-z-á-ű-]{1,58}[\S*]$/';
//$checkPatternAddress = '/^([A-Za-z-Á-Űá-ű]{1,20})+([ ])([A-Za-z-Á-Űá-ű.]{1,20})+([ ])([A-Za-z-Á-Űá-ű-0-9.]{1,10})$/';
?>