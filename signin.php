<!DOCTYPE html>
<html lang="es">
<head>
	<?php include './web/views/common/head.php' ?>
	<link rel="stylesheet" href="./web/styles/form.css">
</head>
<body>
<!-- Nav -->
<?php include './web/views/common/nav.php'; ?>
<!-- Title -->
<div class="title_main title_seginf p1-rl">
<pre>
  _________ __                ___        
 /   _____/|__| ____    ____ |   | ____  
 \_____  \ |  |/    \  / ___\|   |/    \ 
 /        \|  |   |  \/ /_/  >   |   |  \
/_______  /|__|___|  /\___  /|___|___|  /
        \/         \//_____/          \/ 
</pre>
</div>
<div class="or_wrap">
    <p class="space-mono-regular">- or -</p>
    <a class="space-mono-regular btn_login" href="./login.php">LogIn</a>
</div>
<!-- /Title -->
<div class="login_wrap">
    <div id="errorElement"></div>
    <form action="./signinauth.php" method="POST" class="space-mono-regular" id="registerForm" autocomplete="on">
        <label for="nick" class="label_nick">Name<span>*</span></label>
        <input type="text" name="nick" id="nick" class="space-mono-regular" placeholder="Tu nombre de usuario" required>    

        <label for="email">Email<span>*</span></label>
        <input type="email" name="email" id="email" class="space-mono-regular" placeholder="tuemail@contacto.com" required autocomplete="on">

        <label for="pass">Password<span>*</span></label>
        <input type="password" name="pass" id="pass" class="space-mono-regular"  placeholder="Contraseña (min 8 - max 24)" required>

        <div class="legal_input_wrap">
            <input type="checkbox" name="legal" id="legalCheck" onclick="checkLegalConfirm();">
            <label for="legalCheck">Acepto la <a href="./legal.php" target="_blank" rel="noopener noreferrer">Política de Privacidad.</a></label>
        </div>

        <input type="submit" name="btnSignIn" value="SignIn" class="space-mono-regular" id="btnSignIn">
    </form>
</div>
<script>
    const butonSubmit = document.getElementById("btnSignIn");

    butonSubmit.disabled = true;

    function checkLegalConfirm() {
        let legalCheck = document.getElementById("legalCheck");
        let check = legalCheck.checked;
        switch (check) {
            case true:
                butonSubmit.disabled = false;    
                break;
            case false:
                butonSubmit.disabled = true;    
                break;
        }
    }

    /* Validations */

    const nick = document.getElementById("nick");
    const email = document.getElementById("email");
    const password = document.getElementById("pass");
    const legal = document.getElementById("legalCheck");
    const form = document.getElementById("registerForm");

    const errorElement = document.getElementById('errorElement');

    form.addEventListener('submit', (e) => {
        console.log(e)
        let formAlerts = [];
        if(nick.value === '' || nick.value == null) {
            formAlerts.push('Name required');
        }

        if(email.value === '' || email.value == null) {
            formAlerts.push('Email required');
        }

        if(password.value === '' || password.value == null) {
            formAlerts.push('Password required');
        }

        if(formAlerts > 0) {
            e.preventDefault();

            errorElement.innerText = formAlerts.join(', ');
        }
    })

</script>
</body>