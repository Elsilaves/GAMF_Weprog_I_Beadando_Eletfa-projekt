
window.onload=function(){
    var form_sendmsg = document.getElementById("form_sendmsg");
    if (form_sendmsg) {
        form_sendmsg.disabled=true;
    }
};
function checkmsg() {
    var ok = true;
    var notOk = null;
    var form_msgtext = document.getElementById("form_msgtext");
    var form_email = document.getElementById("form_email");
    var form_sendmsg = document.getElementById("form_sendmsg");
    var form_subject = document.getElementById("form_subject");
    var form_name = document.getElementById("form_name");
    
    if (form_name) {
        if (form_name.value.length<6) {
            ok= false;
            form_name.style.color='#f99';
            notOk=form_name;
        }else{
            form_name.style.color ='#9f9'
        }
    }

    if (form_email) {
        var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
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
        notOk=focus();
    }

    
    if (form_sendmsg) {
        form_sendmsg.disabled=!ok;
    }
    return ok;
}
