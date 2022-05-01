<div id="popUpLgn" class="modalForm">
    <form class="popUpForm" method="POST">
        <fieldset id="regForm" class="regForm animate">
            <legend>Bejelentkezés</legend>
            <label for="userName" >Felhasználó név:</label>
            <input name="userName" type="text" placeholder="Emailcím......" require>
            <label for="lgnPsw" >Jelszó: </label>
            <input name="lgnPsw" type="password" placeholder="Jelszó........" require>
            <input type="submit" name="formLoginBtn" value="Belépés">
        </fieldset>
    </form>
</div>

<?php include('./Includes/lgnpdo.php');?>