<!DOCTYPE html>
<!--Desarrollo de Aplicaciones Web-->
<!-- Carlos, Joan-->
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Foto. Pictures &amp; Images</title>
		<meta name="description" content="Pagina web de almacenamiento y difusión de fotos para la asignatura Programación Hipermedia">
		<meta name="keywords" content="fotos, imagenes, pictures, images, album, pagina web, pictures &amp; images, compartir fotos">
		<link rel="stylesheet" href="../css/index.css" media="screen">
		<link rel="stylesheet" href="../css/print.css" media="print">
		<link rel="alternate stylesheet" href="../css/accesible.css" media="screen" title="Modo Accesible">
	</head>
	<body>
		<header>
			<div class="cabeceraizquierda"><a href="index.php"><img src="../images/logo.png" alt="Logo" width=170></a></div>
			<div class="cabeceraderecha">
				 <form action="usuarioRegistrado.php" method="post" class="formularioacceso">
						 <label for="usuario">Usuario:</label><input type="text" id="usuario" name="usuario" required><br>
						 <label for="contraseña">Contraseña:</label><input type="password" id="contraseña" name="contrasena" required><br>
						 <input type="submit" value="Entrar" id="entrar">
				 </form>
				 <nav class="enlacescabecera">¿No estás registrado?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="paginaRegistro.php"><em>Regístrate</em></a>&nbsp;|&nbsp;<a href="busqueda.php"><em>Búsqueda avanzada</em></a><nav>
			 </div>
		</header>
		<main>
			<h2>Detalles de la foto</h2>
			<figure class="fotografia">
                <img src="../images/foto2.jpg" alt="Imagen" width=400>
                <ul>
                    <li>Título: Carretera</li>
                    <li>Fecha: 07/09/2017</li>
                    <li>País: España</li>
                    <li>Álbum: Viaje a Madrid</li>
                    <li>Usuario: <a href="usuarioRegistrado.php">Joaan7</a></li>
                </ul>
			</figure>
		</main>
		<footer>
			<p>Pictures &amp; Images es una web creada por Joan Orts y Carlos Aracil para la asignatura de Desarrollo de Aplicaciones Web de la Universidad de Alicante</p>
			<p>Copyright 2017</p>
		</footer>
	</body>
</html>
