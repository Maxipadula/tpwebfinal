<html>	
<body>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
<?php       session_start();

            include ("../../../rutas.php");

	  	    $permiso = "gestion de transportes";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../../../permiso.php");
?>


<div id='divHeader'>
			<h1> Sistema de Gestión Transporte</h1>
		</div>
	<nav id='divNav' >
				 
       </ul>
	      <ul>
           <li><a href="./<?php echo $agregar_transportes ?>">AGREGAR UN NUEVO TRANSPORTE </a></li>
         <li><a href="./<?php echo $modificar_transportes ?>">MODIFICAR EL ESTADO DE UN TRANSPORTE</a></li> 
		   <li><a href="./<?php echo $eliminar_transportes  ?>">ELIMINAR REGISTRO DE UN TRANSPORTE</a></li>
           <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>  

       </ul>
 
	</nav>

</body>

</html>