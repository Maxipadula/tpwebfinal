<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../css/login.css" TYPE="text/css">
	</head>
	
<body>
<?php include ("../rutas.php"); ?>
<div id='divHeader_chofer'>
			<div id="delog"> <a href ="../<?php echo $deslog?>">DESLOGUEAR</a></div>
			<h1> Sistema de Gestión Logistica</h1>
			 
			<div id="bienvenido"> Bienvenido, <?php echo $_SESSION["nombre"]; ?></div>
		</div>
	<nav id='divNav_chofer' >
		
       <ul>
           <li><a href="./<?php echo $registrar_vc?>">REGISTRAR VALE DE COMBUSTIBLE</a></li>
           <li><a href="./<?php echo $chofer_registro_viaje?>">CREAR REGISTRO DE VIAJE</a></li>
		   <li><a href="./<?php echo $consulta_viaje?>">CONSULTAR FICHA DE VIAJE</a></li>
           <li><a href="../<?php echo $login?>">SALIR</a></li>  

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>