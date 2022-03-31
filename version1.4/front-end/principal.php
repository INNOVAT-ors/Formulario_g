<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos6.css" type="text/css">
</head>
<header>

    <section class="textos-header">
        <h1>Registro</h1>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #000000;"></path></svg></div>
</header>
<body>
    <section class="Usuario">
        <h2 class="titulo">Estimado Usuario</h2>
        <div class="cards">
            <div class="card">
                <img src="exito.jpg" alt="">
                <div class="contenido-texto-card">
                    <h1>Estimado Usuario</h1>
                    <p>Hemos  recibido su solicitud de registro en nuestra plataforma. Se completo el proceso de registro exitosamente</p>
                </div>
            </div>
        </div>
    </section>
    <section class="form-register">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tabla.php"> <input class="botons"  type="reset" value="⌨ Consultar"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php"> <input class="botons"  type="reset" value="↾ ↿ Inicio"></a>
    </section>

    

</body>
</html>
<?php

    include("conectar.php");

    $Curp=$_POST['Curp'];
    $Nombres=$_POST['Nombres'];
    $ap_paterno=$_POST['ap_paterno'];
    $ap_materno=$_POST['ap_materno'];
    $Celular=$_POST['Celular'];

    $query="INSERT INTO formulario(Curp, Nombres, ap_paterno, ap_materno, Celular) VALUES('$Curp','$Nombres','$ap_paterno','$ap_materno','$Celular')";
    $resultado = $conectar -> query($query);
    
        //if($resultado){
        //    echo "Inserción exitosa";
        //}
        //else{
        //    echo "Inserción fallida";
        //}

?>

