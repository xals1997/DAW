<?php
session_start();
require_once("controlAcceso.php");
$title="Resultados búsqueda. Pictures &amp; Images";
require_once("head.php");
if(isset($_SESSION["Estado"])&&$_SESSION["Estado"]=="Autenticado"){
	require_once("headerRegistrado.php");
}
else{
	require_once("header.php");
}
require_once("conexionbd.php")
?>
		<main>
			<h2>Resultados de la búsqueda</h2>
			<?php
				$var = 0;
				$sentencia="select * from FOTOS f where f.Pais='".$_POST['pais']."'";
				if(isset($_POST["titulo"])&&$_POST["titulo"]!=""){
					$sentencia=$sentencia." and f.Titulo LIKE '%".$_POST['titulo']."%'";
				}
				if(isset($_POST["fecha"])&&$_POST["fecha"]!=""){
					$sentencia=$sentencia." and f.Fecha='".$_POST['fecha']."'";
				}
				$resultados=mysqli_query($mysqli, $sentencia);
				if(!$resultados || $mysqli->errno){
					die("Error: No se pudo realizar la consulta".$mysqli->error);
				}
				while($resultado=$resultados->fetch_assoc()){
					if($resultado['Pais']!=""){
						$sentpais="select * from PAISES p where p.IdPais='".$resultado['Pais']."'";
						$paises=mysqli_query($mysqli, $sentpais);
						if(!$paises || $mysqli->errno){
							die("<article class='mensajerror'><p>Error: No se pudo realizar la consulta</p></article>".$mysqli->error);
						}
						$pais=$paises->fetch_assoc();
					}
					
					echo "<figure class='fotografia'>";
					if(isset($_SESSION["Estado"])&&$_SESSION["Estado"]=="Autenticado"){
						echo "<a href='DetalleFoto.php?id=".$resultado['IdFoto']."'>";
						$var = 1;
					}
					echo "<img src='".$resultado['Fichero']."' alt='".$resultado['Titulo']."' width=400>";
					if(isset($_SESSION["Estado"])&&$_SESSION["Estado"]=="Autenticado"){
						echo "</a>";
					}
					echo "<ul>
							<li>Título:".$resultado['Titulo']."</li>
							<li>Fecha:".$resultado['Fecha']."</li>
							<li>País:".$pais['NomPais']."</li>
					</ul></figure><br>";
				}
				if($var == 0){
					echo "<article class='mensajerror'><p>No hay resultados.</p></article>";
				}
				
			?>
		</main>
		<?php
		mysqli_close($mysqli);
		require_once("footer.php");
		?>