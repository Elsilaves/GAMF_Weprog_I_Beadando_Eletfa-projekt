<div id="popUpLgn" class="modalForm">
    <form class="popUpForm" method="POST">
        <fieldset id="regForm" class="regForm animate">
            <legend>Bejelentkezés</legend>
            <label for="userName">Felhasználó név: </label>
            <input name="userName" type="text" require>
            <label for="lgnPsw">Jelszó: </label>
            <input name="lgnPsw" type="password" require>
            <input type="submit" name="formLoginBtn" value="Belépés">
        </fieldset>
    </form>
</div>

<?php include('./Includes/lgnpdo.php');?>