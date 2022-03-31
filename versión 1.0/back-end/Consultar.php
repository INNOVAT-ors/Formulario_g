<?php 

    $conectar = new mysqli("localhost","root","","datos");
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
	<link rel="stylesheet" href="tabla.css" type="text/css">
</head>
<body>
	<center>

	<div id= "main-container">
		<table>
			<thead>
				<tr>
				
					<th>Nombre(s)</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Curp</th>
					<th>Celular</th>
					<th colspan="2">Acción</th>	
					<!--<button value="Actualizar" name="Actualizar" class="btn btn-primary"></button>-->
					<!--<a href="index.php"> <input class="botons"  type="reset" value="Borrar"></a>-->
				</tr>
			</thead>

				<?php 
				$sql="SELECT * from formulario";
				$result=mysqli_query($conectar,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					<td><?php echo $mostrar['Nombres'] ?></td>
					<td><?php echo $mostrar['A_Paterno'] ?></td>
					<td><?php echo $mostrar['A_Materno'] ?></td>
					<td><?php echo $mostrar['idCurp'] ?></td>
					<td><?php echo $mostrar['Celular'] ?></td>
					<td><a href="editar.php"><button class="btn btn-success"  type="button">Editar</button></a></td>
					<td><a href="borrar.php"><button class="btn btn-danger"  type="button">Borrar</button></a></td>
				</tr>
				
				<?php 
		}
		?>
		</table>
	</center>
	</div>
	<!--<a href="index.php"><input class="botons"  type="return" value="Regresar"></a>-->
</body>
</html>