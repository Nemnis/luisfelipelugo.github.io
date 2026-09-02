<!DOCTYPE html>
<html lang="es">
<head>
	<?php include './web/views/common/head.php' ?>
	<link rel="stylesheet" href="./web/styles/welcome.css">
</head>
<body>
    <!-- Nav -->
		<?php include './web/views/common/nav.php'; ?>
    <!-- Title -->
<div class="title_main title_seginf p1-rl" id="scene">
<pre data-depth="0.08">
 __      __        __                               
/  \    /  \ ____ |  |   ____  ____   _____   ____  
\   \/\/   // __ \|  | _/ ___\/  _ \ /     \_/ __ \ 
 \        /\  ___/|  |_\  \__(  <_> )  Y Y  \  ___/ 
  \__/\  /  \___  >____/\___  >____/|__|_|  /\___  >
       \/       \/          \/            \/     \/ 
</pre>
</div>
<!-- /Title -->
    <section class="welcome_wrap">
        <p class="space-mono-regular" id="element">Redirigiendo a Home...</p>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>
        let scene = document.getElementById('scene');
        let parallaxInstance = new Parallax(scene);

    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        let typed = new Typed('#element', {
            strings: ['<i class="txtWhite">Gracias por Registrarte.</i>','<i class="txtWhite">Redirigiendo a Home...</i>^600....^200.^200.^200.^2'],
            typeSpeed: 50,
            fadeOut: true,
            onComplete: function(self) { self.cursor.remove() },
        });

        setTimeout(() => {
            window.location.replace("./")
        }, "8000");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
    <script>
        confetti({
            particleCount: 200,
            spread: 100,
            origin: { y: 0.5 },
        });
    </script>
	<?php include './web/views/common/animated_background.php' ?>
</body>