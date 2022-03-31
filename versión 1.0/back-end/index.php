<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Formulario</title>
</head>
<body>
    <section class="form-register">
        <form action="principal.php" method="post">
            <h4>Formulario de registro</h4>
            <input class="controls" type="text" name="Nombres"  id="nombres" placeholder="ingrese su nombre">
            <input class="controls" type="text" name="A_Paterno" id="apellido paterno" placeholder="ingrese su apellido paterno">
            <input class="controls" type="text" name="A_Materno" id="apellido materno" placeholder="ingrese su apellido materno">
            <form method="post" action="#">
            <label for="text"></label><input class="controls" type="text" id="curp" name="idCurp"  required minlength="18" maxlength="18" placeholder="ingrese su curp">

                <label for="numeros"></label>
                <input class="controls" maxlength="10" minlength="10" type="number" name="Celular" required="" pattern="[0-9]+" placeholder="celular">
            <!--<p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p> -->
            <a href="index2.php"> <input class="botons"  type="submit" value="Registrar"></a>
            <a href="index.php"> <input class="botons"  type="reset" value="Borrar"></a> 
            <a href="Consultar.php"> <input class="botons" type="consult" value="Consultar"></a>
            <!--<p><a href="#">¿Ya tengo cuenta?</a></p>-->
        </form> 
    </section>
</body>
</html>