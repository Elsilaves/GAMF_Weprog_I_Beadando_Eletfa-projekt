<script src="/Scripts/contact.js"></script>
<div class="content">
    <h1>ZÖLD TELEFON LAKOSSÁGI BEJELENTÉS</h1>

    <form class="msg" action="/msg.php" onsubmit="return checkmsg();" method="POST">
        <label for="name">Név</label>
        <input id="form_name"  name="name" type="text" required>
        <label for="email">E-mail</label>
        <input id="form_email" name="email" type="email" required>
        <label for="subject">Tárgy</label>
        <input id="form_subject" name="subject" type="text" required>
        <label for="msg" required>Üzenet</label>
        <textarea name="msg" id="form_msgtext" cols="30" rows="10"></textarea>
        <br>
        <input id="form_sendmsg" name="submit" type="submit" value="Üzenet küldés">
    </form>
    <button onclick="checkmsg();">Ellenőriz</button>
</div>