<?php
if(isset($_GET["salir"])){
		session_destroy();
		setcookie('usuario','', time()-999999);
		setcookie('date','', time()-999999);
		header("location:index.php");
	}

	if(isset($_GET["entrar"])){
		$usuarios = explode(":",$_COOKIE['usuario']);
		if(($usuarios[0]=="joan7" && $usuarios[1]=="dawmola")||($usuarios[0]=="carlos7"&& $usuarios[1]=="jajaja")||($usuarios[0]=="sergio7" && $usuarios[1]=="teneisun10")){
			$_SESSION["Estado"]="Autenticado";
			$date= isset($_COOKIE['date']);
			$fecha=date("j/m/Y - G:i");
			setcookie('date',$fecha,time() +60*60*7);
			header("location:index.php");
		}
		else{
			header("location:index.php?error");
		}
   	 }

    	if(isset($_GET["olvidar"])){
		setcookie('usuario','', time()-999999);
		setcookie('date','', time()-999999);
			header("location:index.php");
   	 }
?>
