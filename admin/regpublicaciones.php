<?php
    session_start();
    require_once '../config/conexion.php';
    $idusuario = $_SESSION["id"];
    $titulo = isset($_POST["titulo"])?$conexion->real_escape_string(htmlentities($_POST["titulo"])):"";
    $archivo = $_FILES["imagen"];
    $nombre = $archivo["name"];
    $tipo = $archivo["type"];
    if($tipo == "image/png" || $tipo == "image/jpg" || $tipo == "image/jpeg"){
        if(!is_dir("images")){
            mkdir("images",0777);
        }
        move_uploaded_file($archivo["tmp_name"],"images/".$nombre);
    }else{
        header("Refresh:3; url=publicaciones.php");
        echo "Sube una imagen con formato correcto";
        exit();
    }
    $imagen = "images/".$nombre;
    $descripcion = isset($_POST["descripcion"])?$conexion->real_escape_string(htmlentities($_POST["descripcion"])):"";
    $sql = "INSERT INTO notas VALUES(null,$idusuario,'$titulo','$imagen','$descripcion',CURDATE());";
    $conexion->query($sql);
    header("Refresh:5; url=publicaciones.php");
    echo "Publicacion registrado correctamente!!!";
?>


