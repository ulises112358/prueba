<?php
    session_start();
    require_once "../config/conexion.php";
    if(isset($_POST)){
        $id = $_POST["id"]?$conexion->real_escape_string(htmlentities($_POST["id"])):"";
        $titulo = $_POST["titulo"]?$conexion->real_escape_string(htmlentities($_POST["titulo"])):"";
        $archivo = $_FILES["imagen"];
        $nombre = $archivo["name"];
        $tipo = $archivo["type"];
        if($tipo == "image/png" || $tipo == "image/jpg" || $tipo == "image/jpeg"){
            if(!is_dir("images")){
                mkdir("images",0777);
            }
            move_uploaded_file($archivo["tmp_name"],"images/".$nombre);
        }else{
            header("Refresh:3; url=modformpublicaciones.php");
            echo "Seleccione un formato correcto";
        }
        $imagen = "images/".$nombre;
        $descripcion = $_POST["descripcion"]?$conexion->real_escape_string(htmlentities($_POST["descripcion"])):"";

        $sql = "UPDATE notas SET titulo = '$titulo', imagen = '$imagen', descripcion = '$descripcion', fecha = CURDATE() WHERE id = $id";
        $conexion->query($sql);
        header("Refresh:3; url=publicaciones.php");
        echo "Se actualizo correctamente";
    }
?>