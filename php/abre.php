<?php
    $conexion = new mysqli("localhost", "root", "", "marvel");

    if($conexion){
        echo "Conexion establecida";
    }else{
        echo "fallo algo no te conectaste";
    }

?>