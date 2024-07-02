<?php
    session_start();
    require_once "../config/conexion.php";
    $id = $_GET["action"]?$conexion->real_escape_string(htmlentities($_GET["action"])):"";
    $sql = "DELETE FROM notas WHERE id = $id";
    $conexion->query($sql);
    header("Refresh:3; url=publicaciones.php");
    echo "Se elimino correctamente";
?>