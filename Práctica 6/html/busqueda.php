<!DOCTYPE html>
<!--Desarrollo de Aplicaciones Web-->
<!-- Carlos, Joan-->
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Búsqueda. Pictures &amp; Images</title>
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
			<h2>Búsqueda</h2>
				<form action="resultadosBusqueda.php" class="formulariobusqueda">
					<label for="titulo">Título:</label><input type="text" id="titulo" name="titulo" placeholder="Título de la foto"><br><br>
					<label for="fecha">Fecha entre:</label><input type="number" id="fecha" name="dia" size="2" maxlength="2" placeholder="Dia"/>/<input type="number" name="mes" size="2" maxlength="2" placeholder="Mes"/>/<input type="number" name="año" size="4" maxlength="4" placeholder="Año"/>&nbsp;&nbsp;&nbsp;y&nbsp;&nbsp;&nbsp;<input type="number" name="dia" size="2" maxlength="2" placeholder="Dia"/>/<input type="number" name="mes" size="2" maxlength="2" placeholder="Mes"/>/<input type="number" name="año" size="4" maxlength="4" placeholder="Año"/><br><br>
					<label for="pais">País:</label><input type="text" id="pais" name="pais" placeholder="País"><br><br><br>
					<div class="botonet"><input type="submit" value="Buscar"></div>
				</form>
		</main>
		<footer>
			<p>Pictures &amp; Images es una web creada por Joan Orts y Carlos Aracil para la asignatura de Desarrollo de Aplicaciones Web de la Universidad de Alicante</p>
			<p>Copyright 2017</p>
		</footer>
	</body>
</html>
