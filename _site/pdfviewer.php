<?php
	if (!isset($_SESSION)) {
		session_start();
	} 

	if(isset($_SESSION["user"]) === false) {
		header("Location: ./login.php");
		exit();
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'web/views/common/head.php' ?>
	<link rel="stylesheet" href="./web/styles/pdfviewer.css">
</head>
<body> 
    <!-- Nav -->
    <?php include './web/views/common/nav.php'; ?>

<!-- Title -->
<div class="title_main title_collector p1-rl" id="scene">
<pre data-depth="0.08">
__________________  ___________
\______   \______ \ \_   _____/
 |     ___/|    |  \ |    __)  
 |    |    |    `   \|     \   
 |____|   /_______  /\___  /   
                  \/     \/    

</pre>
</div>

<div class="container-line fix_w">
    <div class="ifram_wrap">
        <iframe src="./pdf/simulacro.pdf" frameborder="0"></iframe>        
    </div>
</div>

</body>