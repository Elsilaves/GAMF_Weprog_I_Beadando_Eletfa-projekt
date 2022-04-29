<?php
$checkPattern = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/'; //email bevitel reguláris kifejezéséhez.
$checkPatternFName='/^[A-Z-À-Ű-]\d*[a-z-á-ű-].{1,25}[\S*]$/'; //vezetéknév reguláris kifejezéséhez
$checkPatternPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{5,35}$/'; //jelszó reguláris kifejezéséhez
$checkPatternLName  = '/^[A-Z-À-Ű-]\d*[a-z-á-ű-]{1,25}[\S*]$/'; //keresztnév reguláris kifejezéséhez
$checkPatternZip = '/^(?=.*[0-9]).{4,5}$/'; //irányítószám reguláris kifejezéséhez
$checkPatternCity = '/^[A-Z-À-Ű-]\d*[a-z-á-ű-]{1,58}[\S*]$/'; //város reguláris kifejezéséhez
//$checkPatternAddress = '/^([A-Za-z-Á-Űá-ű]{1,20})+([ ])([A-Za-z-Á-Űá-ű.]{1,20})+([ ])([A-Za-z-Á-Űá-ű-0-9.]{1,10})$/';
?>