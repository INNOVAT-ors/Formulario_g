<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    <link rel="stylesheet" href="estilos1.css" type="text/css">
</head>
<header>
<section class="textos-header">
        <h1>Edicion de formulario</h1>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #000000;"></path></svg></div>
</header>
<body>
<?php
                $id=$_REQUEST['id'];

                include("conectar.php");

                $query="SELECT * FROM formulario WHERE id='$id'";
                $resultado = $conectar->query($query);
                $row= $resultado -> fetch_assoc()
            ?>
            
        <form action="editar_proceso.php?id=<?php echo $row ['id'];?>" method="POST">}
<section class="form-register">
        <form action="principal.php" method="post">
            <h4>Ingrese sus Datos</h4>
            <input class="controls" type="text" name="Nombres"  id="nombres" placeholder="ingrese su nombre">
            <input class="controls" type="text" name="ap_paterno" id="apellido paterno" placeholder="ingrese su apellido paterno">
            <input class="controls" type="text" name="ap_materno" id="apellido materno" placeholder="ingrese su apellido materno">
            <form method="post" action="#">
            <label for="text"></label><input class="controls" type="text" id="Curp" name="Curp"  required minlength="18" maxlength="18" placeholder="ingrese su curp">
                <label for="numeros"></label>
                <input class="controls" maxlength="10" minlength="10" type="text" name="Celular" required="" pattern="[0-9]+" placeholder="celular">
                <input type="submit" value="    Enviar    ">

      
        </form> 
    </section>
    </section>





</body>
</html>