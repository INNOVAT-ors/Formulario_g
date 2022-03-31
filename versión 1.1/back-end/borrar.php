<?php
include("conectar.php");
    $idCurp=$_REQUEST["idCurp"];
    $query="DELETE FROM formulario WHERE idCurp='$idCurp'";
    $resultado=$conectar->query($query);

    if($resultado){
        header("Location:Consultar.php");
    }
    else{
        echo "No se borro";
    }
?>