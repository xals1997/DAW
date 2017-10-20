<!DOCTYPE html>
<!--Desarrollo de Aplicaciones Web-->
<!-- Carlos, Joan-->
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Registro. Pictures &amp; Images</title>
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
			<h2>Regístrate</h2>

			<form class="formularioregistro">
				<label for="rusuario">Nombre de usuario:</label><input type="text" id="rusuario" name="usuario" placeholder="Nombre de Usuario"><br><br>
				<label for="rcontraseña">Contraseña:</label><input type="text" id="rcontraseña" name="contrasena" placeholder="Contraseña"><br><br>
				<label for="repetircontraseña">Repetir contraseña:</label><input type="text" id="repetircontraseña" name="rcontrasena" placeholder="Contraseña"><br><br>
				<label for="email">Email:</label><input type="text" id="email" name="email" placeholder="Email"><br><br>
				<label>Sexo:</label>
				<label for="hombre">Hombre<input type="radio" name="sexo" id="hombre" value="Hombre"></label>
			    <label for="mujer">Mujer<input type="radio" name="sexo" id="mujer" value="Mujer"></label><br><br>
				<label>Fecha de nacimiento:</label>
					<input type="number" name="dia" size="2" maxlength="2" placeholder="Dia"/>/<input type="number" name="mes" size="2" maxlength="2" placeholder="Mes"/>/<input type="number" name="año" size="2" maxlength="2" placeholder="Año"/><br><br>
				<label for="ciudad">Ciudad:</label><input type="text" id="ciudad" name="ciudad" placeholder="Ciudad"><br><br>
				<label for="pais">País de Residencia:</label><input type="text" id="pais" name="pais" placeholder="País de residencia"><br><br>
				<label for="foto">Foto:</label><input type="file" name="foto"><br><br>
				<div class="botonet"><input type="submit" class="botonsubmit" value="¡Regístrate!" onclick = "location='PaginaPrincipal.php'"></div>
			</form>

		</main>
		<footer>
			<p>Pictures &amp; Images es una web creada por Joan Orts y Carlos Aracil para la asignatura de Desarrollo de Aplicaciones Web de la Universidad de Alicante</p>
			<p>Copyright 2017</p>
		</footer>
	</body>
</html>
