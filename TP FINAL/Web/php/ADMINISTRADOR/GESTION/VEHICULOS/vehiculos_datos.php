
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php 
		    session_start();
				
		    include ("../../../rutas.php"); 
		  	
			$permiso = "gestion de vehiculos";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../../../permiso.php");
			
			?>
			
<div id='divHeader'>
			<h1> Sistema de Gestión Vehiculos</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  
          <?php include ("../../../rutas.php"); ?>
           
	
		  <!--- <a href="./modificar_vehiculos.php">MODIFICAR</a>
		   <br> --->
	
		  
		  <li><a href="../../<?php echo $registrar_datos?>">SALIR</a></li>


		

       </ul>
 
	</nav>
	<div id="divContenedor">
	</br>
	<a href="./<?php echo $agregar_vehiculos ?>" class="boton">AGREGAR NUEVO VEHICULO</a>
	    <div class="divTabla">
                <?php
                        
                            include ('../../../rutas.php');
                    
                    $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
                    mysql_select_db ("tpFinal",$conexion) or die ("no db");
                        
                        $consulta  = mysql_query ("SELECT U.id_vehiculo ID, IM.descripcion descri, MA.descripcion descrip, U.capacidad_carga  cap
                                                    FROM vehiculo U inner join
                                                    modelo IM on U.id_modelo = IM.id_modelo inner join 
                                                    marca MA on U.id_marca = MA.id_marca") or die ("no q");
                            
                        if ($row = mysql_fetch_array($consulta)){
                            echo "<table> \n";
                            echo "<tr><td>Modelo</td><td>Marca</td><td>Capacidad de Carga</td></tr> \n";
                            do{
                                echo "<tr><td>".$row["descri"]."</td><td>".$row["descrip"]."</td><td>".$row["cap"]."</td><td class='tBotonELim'><a href='".$validar_eliminacion_vehculos."?ID=".$row["ID"]."' class='tLink'>Eliminar</a></td></tr> \n";     
                            } while ($row = mysql_fetch_array ($consulta));
                            echo "</table> \n";
                        } else {
                            echo "no se encontraron ningun registro";
                        } 

                ?>
            </div>

		</div>
</body>

</html>