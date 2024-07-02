<?php
    require_once "global.php";
    $conexion = new mysqli(SERVER,USER,PASSWORD,DATABASE);
    $conexion->query(SET_NAMES);
    if($conexion->connect_errno){
        printf("Fallo la conexión", $conexion->connect_error);
        exit();
    }
    // echo "Conexión con la base de datos exitosa";
?>


