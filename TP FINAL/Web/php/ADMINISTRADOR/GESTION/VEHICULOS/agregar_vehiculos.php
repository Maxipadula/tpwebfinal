 <html>
<head>
	<title>Agregar Vehiculo | S.G.L</title>
		
		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarAgregarVehiculos.js"></script>
		
		<LINK REL="Stylesheet" HREF="../Css/login.css" TYPE="text/css">
</head>	
<body>
	<?php include("vehiculos_datos.php"); ?>
	<?PHP
			
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

			
			
	
	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_vehiculo ) ID
                                        FROM vehiculo ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_vehiculo= $fila1["ID"];
			
			$id_vehiculo +=1;
	?>
	<div id="divContenedor">
	</br>
 	<p>FORMULARIO PARA TABLA VEHICULO:</p>
 	<form class='contacto' method="post" action="<?php echo  $validar_datos_vehiculos  ?>">
 		<div id="contacto">
 				
 				<div><label>ID</label>
 					</br>
					<input type="text" name="id_ve"  value="<?php echo $id_vehiculo?>"readonly = "readonly">
 				</div>
 				</br>
				
 				<div><label>MODELO</label>
 				</br>
				<input type="text" name="modelo" id="modelo" placeholder="Ingrese Modelo">
				<div id="mensaje1" class="errores"> Seleccione un modelo</div>
 				</div>
				<br>
				
				<div><label>MARCA</label>
 				</br>
				<input type="text" name="marca" id="marca" placeholder="Ingrese Marca">
				<div id="mensaje2" class="errores"> Seleccione una marca</div>
 				</div>
				<br>
				
				<div><label>CAPACIDAD DE CARGA</label>
					</br>
 					<input type="text" name="capacidad_carga" id="carga" placeholder="Ingrese Capacidad de Carga">
 					<div id="mensaje3" class="errores"> Ingresa solo numeros</div>
 				</div>
				<br>
				
 				<input type="submit" value="Agregar" id="boton" class="boton">
 				<input type="reset" value="Vaciar" class="boton"/>
				<br>
 		</div>
 	</form>
 	</div>
 </body>
</html>