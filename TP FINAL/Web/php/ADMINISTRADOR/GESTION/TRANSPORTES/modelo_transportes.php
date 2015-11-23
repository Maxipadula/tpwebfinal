

<?php
include ('../../../rutas.php');
                    
                    $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
                    mysql_select_db ("tpFinal",$conexion) or die ("no db");




   if(isset($_POST["marca"])){
	
	
	
	$id_marca = $_POST["marca"];
	
	$data = mysql_query("SELECT MO.descripcion modelo,MO.id_modelo id
                           FROM modelo MO inner join 
								vehiculo V on V.id_modelo = MO.id_modelo inner join
								marca MA on MA.id_marca =V.id_marca
                            WHERE MA.id_marca='".$id_marca."'") or die (mysql_error());
							
	$fila = mysql_fetch_assoc($data);
	$numfilas = mysql_num_rows($data);
	 
	 do
    {  
	   echo $numfilas;
       echo "<option value='".$fila["id"]."'>".$fila["modelo"]."</option>";
	   
    }while( $fila = mysql_fetch_array($data) );
   }



?>