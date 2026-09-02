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
 ____                  __        
|    |    ____   ____ |__| ____  
|    |   /  _ \ / ___\|  |/    \ 
|    |__(  <_> ) /_/  >  |   |  \
|_______ \____/\___  /|__|___|  /
        \/    /_____/         \/ 
</pre>
</div>
<div class="or_wrap">
    <p class="space-mono-regular">- or -</p>
    <a class="space-mono-regular btn_login" href="./signin.php">SignIn</a>
</div>
<!-- /Title -->
<div class="login_wrap">
    <form action="./loginauth.php" method="POST" class="space-mono-regular">
        <label for="user">User</label>
        <input type="text" name="user" id="user" class="space-mono-regular" placeholder="Tu nombre de usuario">

        <label for="name">Password</label>
        <input type="password" name="pass" id="pass" class="space-mono-regular" placeholder="Contraseña (min 8 - max 24)">

        <input type="submit" name="btnLogin" value="LogIn" class="space-mono-regular">
    </form>
</div>
</body>

<?php
/*session_start();
if(isset($_SESSION['user'])) {
    $showUser = $_SESSION['user'];
    echo '<script>console.log("user '.$showUser.'")</script>';
} else {
    echo '<script>console.log(":( no user nigga")</script>';
}*/
?>