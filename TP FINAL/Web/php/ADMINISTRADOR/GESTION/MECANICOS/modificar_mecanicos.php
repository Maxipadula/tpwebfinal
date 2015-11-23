<html>
<body>
	<?php  include ("mecanicos_datos.php");?>
  <div id="divContenedor">
  <div class="divTabla">
	<?PHP

	
	 	
	
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");;
		
	
    $mecanico_interno= mysql_query ("SELECT M.id_mecanico ID,M.nombre nombre
									 FROM mecanico_interno MI inner join 
                                     mecanico M on MI.id_mecanico = M.id_mecanico")or die (mysql_error());
	
	$mecanico_externo= mysql_query ("SELECT M.id_mecanico ID,M.nombre nombre,ME.empresa empresa
									 FROM mecanico_externo ME inner join 
                                     mecanico M on ME.id_mecanico = M.id_mecanico")or die (mysql_error());
		
		echo "MECANICOS INTERNOS";
			if ($row1 = mysql_fetch_array($mecanico_interno)){
			echo "<table border = '1'> \n";
			echo "<tr><td>MECANICO</td></tr>\n";
			do{
				echo "<tr><td>".$row1["nombre"]."</td><td class='tBotonELim'><a href='".$validar_modificacion_mecanico."?ID=".$row1["ID"]."'&clas = 'int' class = 'tlink'>Exteriorizar</a></td></tr> \n";     
			} while ($row1 = mysql_fetch_array($mecanico_interno));
			echo "</table> \n";
			}
			
			echo "</br></br></br>";
			echo "MECANICOS EXTERNOS";
			
			if ($row2 = mysql_fetch_array($mecanico_externo)){
			echo "<table border = '1'> \n";
			echo "<tr><td>MECANICO</td><td>EMPRESA</td></tr>\n";
			do{
				echo "<tr><td>".$row2["nombre"]."</td><td>".$row2["empresa"]."</td><td class='tBotonELim'><a href='".$validar_modificacion_mecanico."?ID=".$row2["ID"]."'clas = 'ext' class = 'tlink'>Interiorizar</a></td></tr> \n";     
			} while ($row2 = mysql_fetch_array($mecanico_externo));
			echo "</table> \n";
			
			
				} else {
			echo "no se encontraron ningun registro";
		} 
		
		?>
            
            </div>
        </div>
	
	</body>
	
	</html>
