<?php 

    $conectar = new mysqli("localhost","root","","datos");
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
	<link rel="stylesheet" href="tabla0.css" type="text/css">
</head>
<header>
    <nav>
	<section class="form-register">
	<a href="http://localhost/trabajo/index.php"> <input class="botons"  type="reset" value="↾ ↿ Inicio"></a>
	</section>
        

    </nav>
    <section class="textos-header">
        <h1>Consulta</h1>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #000000;"></path></svg></div>
</header>
<body>
	

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
					<td><a href="borrar.php?idCurp=<?php echo $mostrar['idCurp']?>"><button class="btn btn-danger"  type="button">Eliminar</button></a></td>
				</tr>
				
				<?php 
		}
		?>
		</table>
	
	</div>
	<!--<a href="index.php"><input class="botons"  type="return" value="Regresar"></a>-->

</body>
</html>