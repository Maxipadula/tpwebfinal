<?PHP
	session_start() ;
	
	$user =$_POST ["usuario"];
	$clave =$_POST ["clave"];
	
	include 'rutas.php';
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$consulta1 = mysql_query("SELECT * 
	                        FROM usuario
	                        WHERE pass ='".$clave."' AND  usuario='".$user."'") or die ("no q");
	
	$filasafectadas1 = mysql_num_rows($consulta1);
	
	if ( $filasafectadas1 != 0){
	
	    if ( $filasafectadas1 == 1){
	

	        $fila1 = mysql_fetch_assoc($consulta1);

           	    
	        if ($fila1["codigo_rol"] == 1){
				 
			
				 $_SESSION["cod_rol"] = $fila1["codigo_rol"];
				 $_SESSION["id_usuario"] = $fila1['id_usuario'];
				 $_SESSION["nombre"] = $fila1['nombre'] ;
				 
	             header("location:./CHOFER/".$obtener_viaje."");
				 
				 
			}else if ($fila1["codigo_rol"] == 2){
				  
				 $_SESSION["cod_rol"] = $fila1["codigo_rol"];
				 $_SESSION["id_usuario"] = $fila1['id_usuario'];
			     $_SESSION["nombre"] = $fila1['nombre'] ;
				
				 
                 header ("location:./".$administrador_home."");
	        
            
			
			}else if($fila1["codigo_rol"] == 3){
				 
                 $_SESSION["cod_rol"] = $fila1["codigo_rol"];
				$_SESSION["id_usuario"] = $fila1['id_usuario'];
				 $_SESSION["nombre"] = $fila1['nombre'] ;
				 
				 
                 header("location:./SUPERVISOR/".$supervisor_home."");
			 
			
			}else header("location:error.php");
			 
	    }else header("location:error.php");
	
	}else header("location:error.php");
	

?>
