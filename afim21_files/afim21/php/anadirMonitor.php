<?php

		session_start();
		include_once "conexion.php";
		
		if(isset($_POST['anadir'])){
			//obtenemos los valores de anadirMonitor.html
			
			$nombre=$_POST['nombreMonitor'];
			$apellidos=$_POST['apellidosMonitor'];
			$descripcion=$_POST['descripcion'];
			/*$foto=$_POST['foto'];*/
			$archivo=$_FILES['imagenMonitor']['tmp_name'];
			$destino= "fotos/". $_FILES['imagenMonitor']['name'];
			
			move_uploaded_file($archivo, $destino);
			
			if($nombre==null or $apellidos==null){
				echo 'Por favor rellene los campos obligatorios *';
			}else{
				//comprobamos que el nombre y apellidos estan/no estan en la BD
				$sql = mysql_query("SELECT * FROM monitores WHERE nombreMonitor = '$nombre' AND apellidosMonitor = '$apellidos'");
				
				$contar = mysql_num_rows($sql);
				
				if($contar>0){			
					//La persona ya está
					echo 'Este monitor ya existe en la BD';	
					echo "<br>";	
				}else{
					//Añade la informacion a la tabla
					$sql = "INSERT INTO monitores (idMonitor,nombreMonitor,apellidosMonitor,descripcion,imagenMonitor) VALUES ('','$nombre','$apellidos','$descripcion', '$destino')";
					
					mysql_query($sql);

					echo 'Monitor añadido correctamente';
					echo "<br>";
				}

			}
		}
		include_once "cerrar_conexion.php";	
		echo "<a href='http://localhost/afim21/php/monitores.php'>VOLVER</a>";
?>
