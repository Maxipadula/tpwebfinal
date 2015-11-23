<html>
<meta charset="UTF-8">
<?PHP
	 session_start();
	 
	  include ('../rutas.php');
	  
	  $permiso = "supervisor home";
	  	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	  
	  include("../permiso.php");
	  
	  if ( isset ($_SESSION["nombre"])){
		
	   $nombre = $_SESSION["nombre"];
	   
	   }
	   else{
		     session_destroy();
    
           header("location:login.php");
	   }
	   
?>

<html>
	<head>
		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
	</head>
	
	<body>
		<div id='divHeader_supervisor'>
		<div id="delog"> <a href ="../<?php echo $deslog?>">DESLOGUEAR</a></div>
			<h1> Sistema de Gestión Logistica</h1>
			<div id="bienvenido"> Bienvenido, <?php echo $_SESSION["nombre"]; ?></div>
		</div>

			<nav id='divNav_supervisor'>
		
				<ul>
       			    <li><a href="./<?php echo $registrar_datos_sup ?>"> REGISTROS</a></li>
				    <li><a href="./<?php echo $ver_mapa ?>"> MAPA</a></li>
            		<li><a href="../<?php echo $login?>"> SALIR</a></li>
				</ul>
			</nav>

		<div id="divContenedor">


		</div>

	</body>
</html>
