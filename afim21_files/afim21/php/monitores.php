<?php
	require('conexion.php');
	
	$query="SELECT idMonitor, nombreMonitor, apellidosMonitor, descripcion, imagenMonitor FROM monitores";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Monitores</title>
	</head>
	<body>
		
		<center><h1>Monitores</h1></center>
		
		<a href='http://localhost/afim21/anadirMonitor.html'>Nuevo monitor</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Nombre</b></td>
					<td><b>Apellidos</b></td>
					<td><b>Descripcion</b></td>
					<td><b>Imagen</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['nombreMonitor'];?>
							</td>
							<td>
								<?php echo $row['apellidosMonitor'];?>
							</td>
							<td>
								<?php echo $row['descripcion'];?>
							</td>
							<td>
								<?php echo $row['imagenMonitor'];?>
							</td>
							<td>
								<a href="modMonitor.php?idMonitor=<?php echo $row['idMonitor'];?>">Modificar</a>  <!--Pasa el idMonitor a modMonitor.php mediante GET-->
							</td>
							<td>
								<a href="eliminarMonitor.php?idMonitor=<?php echo $row['idMonitor'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
