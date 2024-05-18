<?php
include_once("php/config/bdconection.php");
?>

<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">

<head>
	<title>Legacy</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<link rel="shortcut icon" href="images/logo_legacy.png" type="image/x-icon">
	<link rel="stylesheet" href="css/my_style.css">
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="logo">
				<span class="icon">
					<img src="images/logo_legacy.png" alt="Legacy" width="80" height="auto">
				</span>
			</div>
			<div class="content">
				<div class="inner">
					<h1>Legacy</h1>
					<p>Play Station 5 🎮 Juegos Arcade 🖲 Nintendo Switch,🕹 Realidad Virtual 😎</p>
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="#intro">Inicio</a></li>
					<li><a href="#view_promotions">Promoción</a></li>
					<li><a href="#contact">Contactanos</a></li>
					<li><a href="#login">Login</a></li>
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<div id="main">

			<!-- Intro -->
			<article id="intro">
				<h2 class="major">Inicio</h2>
				<span class="image main"><img src="images/pic01.jpg" alt="" /></span>

			</article>

			<!-- view promotions -->
			<?php
			include 'php/view_promotions.php';
			?>


			<!-- Contact -->
			<article id="contact">
				<h2 class="major">Contactanos</h2>
				<form method="post" action="#">
					<div class="fields">
						<div class="field half">
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message">Mensaje</label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Enviar Mensaje" class="primary" /></li>
						<li><input type="reset" value="Limpiar" /></li>
					</ul>
				</form>
				<ul class="icons">
				<li><a href="https://www.facebook.com/legacyvr.oficial" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-tiktok"><span class="label">TikTok</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				</ul>
			</article>

			<!-- Login -->
			<article id="login">
				<h2 class="major">Iniciar Sesion</h2>
				<form action="post">
					<div class="fields">
						<div class="field">
							<label for="name">Usuario</label>
							<input type="text" name="user" id="user" />
						</div>
						<div class="field">
							<label for="password">Contraseña</label>
							<input type="password" name="password" id="password" />
						</div>
					</div>
					<div class="actions">
						<input type="submit" value="Iniciar Sesion" class="primary" />
					</div>
				</form>
			</article>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<p class="copyright">&copy; Leo Ða Vinci Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
		</footer>

	</div>

	<!-- BG -->
	<div id="bg"></div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>