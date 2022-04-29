<script src="/Scripts/checkForm.js"></script>
<form class="popUpForm" method="POST">
<fieldset id="regForm" class="regForm animate">
    <legend>Regisztráció</legend>
    <div id="regName">
        <label for="regFirstName">Vezeték név: </label>
        <input id="form_firstName" name="regFirstName" type="text" value="Teszt" require>
        <label for="regLastName">Kereszt név: </label>
        <input id="form_lestName" name="regLasttName" type="text" value="Elek" require>
        <label for="regEmail">E-mail cím: </label>
        <input id="form_regEmail"  name="regEmail" type="email" value="elek.teszt@tesztelek.hu" require>
    </div>
    <div id="redAddress">
        <label for="regCity">Város: </label>
        <input id="form_regCity" name="regCity" type="text" value="Baja" require>
        <label for="regPostalcode">Irányítószám: </label>
        <input id="form_regPostalcode" name="regPostalcode" type="text" value="2111" require>
        <label for="regAddress">Cím: </label>
        <input id="form_regAddress" name="regAddress" type="text" value="Bajjai út 1" require>
    </div>
    <div id="regPassword">
        <label for="regPassword">Jelszó: </label>
        <input id="form_regPassword" name="regPassword" type="password" require>
        <label for="regPasswordCh">Jelszó újra: </label>
        <input id="form_reRegPassword" name="regPasswordCh" type="password" require>
    </div>
    <br>
    <div id="regBtn">
        <input id="form_reg" type="submit" name="formRegBtn" value="Regisztráció">
    </div>
</fieldset>
</form>
<script src="/Scripts/modal.js"></script>

<?php include ('./Includes/regpdo.php'); ?>