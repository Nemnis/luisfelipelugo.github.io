<?php
    if (!isset($_SESSION)) {
        session_start();
        session_destroy();
        session_unset();
        //echo '<script>console.log("session post: '.isset($_SESSION).'")</script>';
    }    
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include './web/views/common/head.php' ?>
	<link rel="stylesheet" href="./web/styles/goodbye.css">
</head>
<body>
    <!-- Nav -->
		<?php include './web/views/common/nav.php'; ?>
    <!-- Title -->
<div class="title_main title_seginf p1-rl">
<pre>
__________               
\______   \___ __  ____  
 |    |  _<   |  |/ __ \ 
 |    |   \\___  \  ___/ 
 |______  // ____|\___  >
        \/ \/         \/ 
</pre>
</div>
<!-- /Title -->
<div class="or_wrap">
    <p class="space-mono-regular">- Return to main Page -</p>
    <a class="space-mono-regular btn_login" href="./">Home</a>
</div>
</body>
<script>
    document.cookie.split(';').forEach(cookie => {
        const eqPos = cookie.indexOf('=');
        const name = eqPos > -1 ? cookie.substring(0, eqPos) : cookie;
        document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:00 GMT';
    });
    
    window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
</script>