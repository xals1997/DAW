	<body>
		<header>
			<div class="cabeceraizquierda"><a href="index.php"><img src="../images/logo.png" alt="Logo" width=170></a></div>
			<div class="cabeceraderecha">
				
				<?php
					if(isset($_COOKIE['usuario'])&&isset($_COOKIE['date'])){
						$usuarios = explode(":",$_COOKIE['usuario']);
				?>
				<a href="usuarioRegistrado.php"><img src="../images/usuario.png" alt="icono usuario" width=40></a>
				<nav class="formularioacceso"> Hola. <? echo $usuarios[0]?> Última conexión: <?php echo $_COOKIE['date']?></nav>
				<nav class="enlacescabecera"><a href="index.php?olvidar">Cerrar sesión</a>&nbsp;|&nbsp;<a href="busqueda.php"><em>Búsqueda avanzada</em></a></nav>

				<?php
					}
					else{
				?>


				<form action="controlAcceso.php" method="post" class="formularioacceso">
					 <label for="usuario">Usuario:</label><input type="text" id="usuario" name="usuario" required><br>
					 <label for="contraseña">Contraseña:</label><input type="password" id="contraseña" name="contrasena" required><br>
					 <label for="Recordarme">Recordarme</label><input type="checkbox" name="Recordarme" value="Recordarme" id="Recordarme">
				 	 <input type="submit" value="Entrar" id="entrar">
				</form>
				<nav class="enlacescabecera">¿No estás registrado?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="paginaRegistro.php"><em>Regístrate</em></a>&nbsp;|&nbsp;<a href="busqueda.php"><em>Búsqueda avanzada</em></a><nav>
				<?php
					}if(isset($_GET["error"])){
						echo "<nav class='incorrecto'>Nombre de cuenta o contraseña incorrecta</nav>";
					}
				?>
			</div>
		</header>
