<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos5.css" type="text/css">
</head>
<header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Nuestra cinecia</a>
        <a href="#">Nosotros</a>
        <a href="#">Nuestros proyectos</a>

    </nav>
    <section class="textos-header">
        <h1>Formulario de registro</h1>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #000000;"></path></svg></div>
</header>
<body>
    <section class="form-register">
        <form action="principal.php" method="post">
            <h4>Ingrese sus Datos</h4>
            <input class="controls" type="text" name="Nombres"  id="nombres" placeholder="ingrese su nombre">
            <input class="controls" type="text" name="A_Paterno" id="apellido paterno" placeholder="ingrese su apellido paterno">
            <input class="controls" type="text" name="A_Materno" id="apellido materno" placeholder="ingrese su apellido materno">
            <form method="post" action="#">
            <label for="text"></label><input class="controls" type="text" id="curp" name="idCurp"  required minlength="18" maxlength="18" placeholder="ingrese su curp">
                <label for="numeros"></label>
                <input class="controls" maxlength="10" minlength="10" type="text" name="Celular" required="" pattern="[0-9]+" placeholder="celular">


            <!--<p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p> -->
            <center><a href="index2.php"> <input class="botons"  type="submit" value="Registrar"></a></center>
            <center><a href="index.php"> <input class="botons"  type="reset" value="Borrar"></a></center>
            <!--<p><a href="#">¿Ya tengo cuenta?</a></p>-->
        </form> 
    </section>
    </section>

    

</body>
</html>