// Az onload funkció az oldal betöltésekor aktiválódik

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
window.onload=function(){                                          ///  
    var form_reg = document.getElementById("form_reg");            ///
    if (form_reg) {                                                ///   
        form_reg.disabled=true;                                    /// 
    }                                                              ///
};                                                                 /// 
                                                                   /// 
window.onload=function(){                                          /// 
    var form_sendmsg = document.getElementById("form_sendmsg");    ///
    if (form_sendmsg) {                                            /// 
        form_sendmsg.disabled=true;                                /// 
    }                                                              ///
};                                                                 ///
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
oninput=function () { // a funkció bevitel megkezdése esetén aktiválódik
    //Globális változók
    var ok = true;
    var notOk = null;

    //Regisztrációs ürlap váltorók
    var form_firstName = document.getElementById("form_firstName");
    var form_lestName = document.getElementById("form_lestName");
    var form_regEmail = document.getElementById("form_regEmail");
    var form_regCity = document.getElementById("form_regCity");
    var form_regPostalcode = document.getElementById("form_regPostalcode");
    var form_regAddress = document.getElementById("form_regAddress");
    var form_regPassword = document.getElementById("form_regPassword");
    var form_reRegPassword = document.getElementById("form_reRegPassword");

    //Kontakt ürlap változók
    var form_msgtext = document.getElementById("form_msgtext");
    var form_email = document.getElementById("form_email");
    var form_sendmsg = document.getElementById("form_sendmsg");
    var form_subject = document.getElementById("form_subject");
    var form_name = document.getElementById("form_name");
    //Reguláris kifejezések meghatározása
    var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var checkPatternPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{5,35}$/;
    var checkPatternLName  = /^[A-Z-À-Ű-]\d*[a-z-á-ű-]{1,25}[\S*]$/;
    var checkPatternFName  = /^[A-Z-À-Ű-]\d*[a-z-á-ű-].{1,25}[\S*]$/;
    var checkPatternZip = /^(?=.*[0-9]).{4,5}$/;
    var checkPatternCity = /^[A-Z-À-Ű-]\d*[a-z-á-ű-]{1,58}[\S*]$/;
    var checkPatternAddress = /^([A-Za-z-Á-Űá-ű]{1,20})+([ ])([A-Za-z-Á-Űá-ű \.]{1,20})+([ ])([A-Za-z-Á-Űá-ű-0-9 \.]{1,10})$/;

//Regisztrációs ürlap ellenőrzése

// Ellenőrzi a bevitelt és amenniyben a reguláris kifejezéstől eltér a bevitt adat, úgy a beviteli gombot letiltja és elszinezi a szöveget pirosra.
// Helyes kitöltés esetén a szöveg zöld színű lesz és a beküldés gomb aktiválódik. 


    if (form_firstName) {
        if (!checkPatternFName.test(form_firstName.value)) {
            ok= false;
            form_firstName.style.color='#f99';
            notOk=form_firstName;
        }else{
            form_firstName.style.color ='#9f9'
        }
    }

    if (form_lestName) {
        if (!checkPatternLName.test(form_lestName.value)) {
            ok= false;
            form_lestName.style.color='#f99';
            notOk=form_lestName;
        }else{
            form_lestName.style.color ='#9f9'
        }
    }

    if (form_regEmail) {
        if (!checkPattern.test(form_regEmail.value)) {
            ok = false;
            form_regEmail.style.color='#f99';
            notOk=form_regEmail;
        }else{
            form_regEmail.style.color ='#9f9'
        }
    }

    if (form_regCity) {
        if (!checkPatternCity.test(form_regCity.value)) {
            ok= false;
            form_regCity.style.color='#f99';
            notOk=form_regCity;
        }else{
            form_regCity.style.color ='#9f9'
        }
    }
    if (form_regPostalcode) {
        if (!checkPatternZip.test(form_regPostalcode.value)) {
            ok= false;
            form_regPostalcode.style.color='#f99';
            notOk=form_regPostalcode;
        }else{
            form_regPostalcode.style.color ='#9f9'
        }
    }

    if (form_regAddress) {
        if (!checkPatternAddress.test(form_regAddress.value)) {
            ok= false;
            form_regAddress.style.color='#f99';
            notOk=form_regAddress;
        }else{
            form_regAddress.style.color ='#9f9'
        }
    }

    if (form_regPassword) {
        if (!checkPatternPassword.test(form_regPassword.value)) {
            ok= false;
            form_regPassword.style.color='#f99';
            notOk=form_regPassword;
        }else{
            form_regPassword.style.color ='#9f9'
        }
    }

    if (form_reRegPassword) {
        if (form_reRegPassword.value != form_regPassword.value) {
            ok= false;
            form_reRegPassword.style.color='#f99';
            notOk=form_reRegPassword;
        }else{
            form_reRegPassword.style.color ='#9f9'
        }
    }
    
    //Kontakt ürlap ellenőrzése

    if (form_name) {
        if (!checkPatternFName.test(form_name.value)) {
            ok= false;
            form_name.style.color='#f99';
            notOk=form_name;
        }else{
            form_name.style.color ='#9f9'
        }
    }

    if (form_email) {
        if (!checkPattern.test(form_email.value)) {
            ok = false;
            form_email.style.color='#f99';
            notOk=form_email;
        }else{
            form_email.style.color ='#9f9'
        }
    }
    
    if (form_subject) {
        if (form_subject.value.length==0) {
            ok= false;
            form_subject.style.color='#f99';
            notOk=form_subject;
        }else{
            form_subject.style.color ='#9f9'
        }
    }

    if (form_msgtext) {
        if (form_msgtext.value.length==0) {
            ok= false;
            form_msgtext.style.color='#f99';
            notOk=form_msgtext;
        }else{
            form_msgtext.style.color ='#9f9'
        }
    }

    if (notOk) {
        notOk=focus(); //Helytelenül kitöltött mezőre fókuszál
    }

    
    if (form_sendmsg) { //üzenetküldési gomb megjelenítése, amenniyben helyesek az adatok
        form_sendmsg.disabled=!ok;
    }
    if (form_reg) { //Regisztációs gomb megjelenítése, amenniyben helyesek az adatok
        form_reg.disabled=!ok;
    }
    return ok;
};