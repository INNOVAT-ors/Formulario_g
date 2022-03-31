<?php



include("conectar.php");

    $idCurp = $_POST['idCurp'];
    $Nombres = $_POST['Nombres'];
    $A_Paterno = $_POST['A_Paterno'];
    $A_Materno = $_POST['A_Materno'];
    $Celular = $_POST['Celular'];

    $query = "INSERT INTO formulario(idCurp,Nombres,A_Paterno,A_Materno,Celular) VALUES('$idCurp','$Nombres','$A_Paterno','$A_Materno','$Celular')";
    $resultado = $conectar->query($query);

    if($resultado){
        include("index2.php");
    }
    else{
        echo"insersión fallida";
    }

?>
