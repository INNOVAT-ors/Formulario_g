<?php 

    $conectar = new mysqli("localhost","root","","datos2");
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
	<a href="index.php"> <input class="botons"  type="reset" value="↾ ↿ Inicio"></a>
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
                    <th>Id</th>
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
                include("conectar.php");

                $query="SELECT * FROM formulario";
                $resultado = $conectar->query($query);
                while($row= $resultado -> fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row ['id'];?></td>
                    <td><?php echo $row ['Nombres'];?></td>
                    <td><?php echo $row ['ap_paterno'];?></td>
                    <td><?php echo $row ['ap_materno'];?></td>
                    <td><?php echo $row ['Curp'];?></td>
                    <td><?php echo $row ['Celular'];?></td>
                    <td><a href="editar.php?id=<?php echo $row ['id'];?>" > Editar</a></td>
					<td><a href="borrar.php?id=<?php echo $row ['id'];?>" > Borrar</a></td>
                </tr>
                
            <?php
                }
            ?>
		</table>
	
	</div>
	<!--<a href="index.php"><input class="botons"  type="return" value="Regresar"></a>-->

</body>
</html>