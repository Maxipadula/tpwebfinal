<html>		

<?php include ("supervisor_home.php");?>

<!DOCTYPE html>
<div id="divContenedor">
<div class="divTabla">
	<head>
	<center>
		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
		<script src="http://maps.googleapis.com/maps/api/js"></script> 

	</head>
	<body>
<?php
	$id_viaje = $_GET["ID"];
	
	$consulta_coordenadas = mysql_query("SELECT L.latitud latitud,L.longitud longitud
										 FROM vale_combustible VC inner join
											  lugar L on VC.id_lugar = L.id_lugar
										 WHERE VC.id_viaje = ".$id_viaje."");

	
										 
?>
		<!--La API de Google Maps es una biblioteca JavaScript.-->
		<script>
			function initialize() {                    /*para inicializar el mapa */
				var mapProp = {                            /*objetivo, para las propiedades del mapa */  
					center:new google.maps.LatLng(-34.62529785895708,-58.383750915527344),    /*latitud y longitud del mapa */
					zoom:5,                               
					mapTypeId:google.maps.MapTypeId.ROADMAP    /*tipos de mapas */
				};
				var map=new google.maps.Map(document.getElementById("googleMap"),mapProp); /*El código anterior crea un nuevo mapa en el interior del elemento*/
				var mapa = new google.maps.Map(map, mapProp);
				<?php
					while($coordenadas=mysql_fetch_assoc($consulta_coordenadas)){
						
						$latitud = $coordenadas["latitud"];
						$longitud = $coordenadas["longitud"];
						
					echo ("var marcador = new google.maps.Marker({  
							position: new google.maps.LatLng(".$latitud.",".$longitud."),
							map: map		
				          });")	;

					}?>
				
			}
			google.maps.event.addDomListener(window, 'load', initialize); /*ejecuta la funcion de "initialize"*/
		
		</script>
<div id="googleMap" style="width:500px;height:380px;"></div>  	
</body>
</html>