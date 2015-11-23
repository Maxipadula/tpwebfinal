<html>
	<head>
		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
	</head>
	
	<body>
	
	<?php 	
	     session_start();
	
	     include ('../rutas.php');
		 
		 $permiso = "gestion de viajes";
		 
		 $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	     mysql_select_db ("tpFinal",$conexion) or die ("no db");
	  
	     include("../permiso.php");
	
	
	?>

		   
		      	<div id='divHeader_supervisor'>
			<h1>VIAJES</h1>
		</div>

			<nav id='divNav_supervisor'>
		
				<ul>
       			    <li> <a  href="./<?php echo $agregar_viaje ?>">ASIGNAR UN VIAJE</a></li>
            		<li><a href="./<?php echo $modificar_viaje ?>">MODIFICAR UN VIAJE</a></li>
					<li><a href="./<?php echo $eliminar_viaje ?>">ELIMINAR REGISTRO DE VIAJE</a></li>
					<li> <a href="./<?php echo $supervisor_home?>">ATRAS</a></li>
				</ul>
			</nav>

		<div id="divContenedor">


		</div>
		   
	</body>



</html>