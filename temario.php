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
	
<title>Luis Lugo - Seguridad Informática</title>
	<?php include 'web/views/common/head.php' ?>
	<link rel="stylesheet" href="./web/styles/temario.css">
</head>
<body> 
	<div class="fh">
		<!-- Nav -->
		<?php include './web/views/common/nav.php'; ?>

<!-- Title -->
<div class="title_main title_seginf p1-rl" id="scene">
<pre data-depth="0.08">
  _________                           __     ___            ___     ___        _____                            __   __               
 /   _____/ ____   ____  __ _________|__| __| _/____     __| _/    |   | _____/ ____\___________  _____ _____ _/  |_|__| ____ _____   
 \_____  \_/ __ \ / ___\|  |  \_  __ \  |/ __ |\__  \   / __ |     |   |/    \   __\/  _ \_  __ \/     \\__  \\   __\  |/ ___\\__  \  
 /        \  ___// /_/  >  |  /|  | \/  / /_/ | / __ \_/ /_/ |     |   |   |  \  | (  <_> )  | \/  Y Y  \/ __ \|  | |  \  \___ / __ \_
/_______  /\___  >___  /|____/ |__|  |__\____ |(____  /\____ |     |___|___|  /__|  \____/|__|  |__|_|  (____  /__| |__|\___  >____  /
        \/     \/_____/                      \/     \/      \/              \/                        \/     \/             \/     \/ 
</pre>
</div>
<!-- /Title -->
		<main>
			<!-- Collector -->
			<div class="container-line space-mono-regular container-black">
				<div class="container-temas">
					
					<h2>Filtros</h2>

					<div class="filter-temas">
						<div class="filter">
							<input type="search" class="searchBox">
						</div>
					</div>

				</div>
				
				<div class="temario-resume">
					<p>Resumen de los aspectos clave que hemos visto en cada uno de los temas del curso de Seguridad Informática.</p>
				</div>
				
				<div class="temas-wrap">
					<div class="tema-info">
						<h3>Tema 1</h3>
						<div class="tema-contenido">
							<p>- ISO 27000</p>
							<p>- Metodología ITIL</p>
							<p>- LOPD</p>
						</div>
						<div class="mas-contenido">
							<a href="#" target="_blank" rel="noopener noreferrer">Más</a>
						</div>
					</div>
					<div class="tema-info">
						<h3>Tema 2</h3>
						<div class="tema-contenido">
							<p>- Procesos</p>
							<p>- Monitorizar Procesos</p>
							<p>- Consumo de Recursos</p>
							
							<h4>E2</h4>
						</div>
						<div class="mas-contenido">
							<a href="#" target="_blank" rel="noopener noreferrer">Más</a>
						</div>
					</div>
					<div class="tema-info">
						<h3>Tema 3</h3>
						<div class="tema-contenido">
							<p>- Dispositivos de Almacenamiento</p>
							<p>- Herramientas</p>

							<h4>Examen Práctico (RAID)</h4>
						</div>
						<div class="mas-contenido">
							<a href="#" target="_blank" rel="noopener noreferrer">Más</a>
						</div>
					</div>
					<div class="tema-info">
						<h3>Tema 4</h3>
						<div class="tema-contenido">
							<p>- Métricas e Indicadores de Monitorización</p>

							<h4>E1</h4>
						</div>
						<div class="mas-contenido">
							<a href="#" target="_blank" rel="noopener noreferrer">Más</a>
						</div>
					</div>
					<div class="tema-info">
						<h3>Tema 5</h3>
						<div class="tema-contenido">
							<p>- Monitorizar Comunicaciones</p>
							<p>- OSI TCP/IP</p>
							<p>- SIM/SEM</p>
							<p>- Filtrado Red</p>
							<p>- Sniffer</p>

							<h4>E6 (Hobbit, Nagios, CACTI)</h4>
						</div>
						<div class="mas-contenido">
							<a href="#" target="_blank" rel="noopener noreferrer">Más</a>
						</div>
					</div>
					<div class="tema-info">
						<h3>Tema 6</h3>
						<div class="tema-contenido">
							<p>- Registro</p>
							<p>- CIA</p>
							<p>- Custodia</p>
						</div>
						<div class="mas-contenido">
							<a href="#" target="_blank" rel="noopener noreferrer">Más</a>
						</div>
					</div>
					<div class="tema-info">
						<h3>Tema 7</h3>
						<div class="tema-contenido">
							<p>- Control de Acceso</p>
							<p>- Locales</p>
							<p>- Remotos</p>
							<p>- IAM</p>
							<p>- LDAP</p>
							<p>- Privilegios</p>
						</div>
						<div class="mas-contenido">
							<a href="#" target="_blank" rel="noopener noreferrer">Más</a>
						</div>
					</div>
					<div class="tema-info">
						<h3>Actividades No Evaluables</h3>
						<div class="tema-contenido">
							<p>E4 Visor de Eventos</p>
							<p>E5 Monitor de Rendimiento</p>
							<p>E6 Nagios</p>
						</div>
						<div class="mas-contenido">
							<a href="#" target="_blank" rel="noopener noreferrer">Más</a>
						</div>
					</div>
				</div>

			</div>
		</main>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<!--<script>
		let scene = document.getElementById('scene');
		let parallaxInstance = new Parallax(scene);
		console.log("xD en serio, que buscas niño? ¬¬");
	</script>-->
	<?php include './web/views/common/animated_background.php' ?>
	<?php include './web/views/common/underconstruction.php' ?>
</body>
</html>