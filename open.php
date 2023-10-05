<?php
    $conexion = new mysqli("localhost","root","","escuela");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conecion";
    }

?>