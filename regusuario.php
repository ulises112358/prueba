<?php
    include_once "./config/conexion.php";
    if(isset($_POST)){
        $nombre = isset($_POST["nombre"]) ? $conexion->real_escape_string(htmlentities($_POST["nombre"])):"";
        $apellidos = isset($_POST["apellidos"]) ? $conexion->real_escape_string(htmlentities($_POST["apellidos"])):"";
        $correo = isset($_POST["correo"]) ? $conexion->real_escape_string(htmlentities($_POST["correo"])):"";
        $password = isset($_POST["password"]) ? $conexion->real_escape_string(htmlentities($_POST["password"])):"";
    }
    $hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>10]);
    $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellidos','$correo','$hash',CURDATE())";
    $conexion->query($sql);
    if($conexion){
        header('Location:index.php');
    }
?>


