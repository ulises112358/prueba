<?php
    session_start();
    require_once './config/conexion.php';
    $correo = isset($_POST['correo'])?$conexion->real_escape_string(htmlentities($_POST['correo'])):"";
    $password = isset($_POST['password'])?$conexion->real_escape_string(htmlentities($_POST['password'])):"";
    $sql = "SELECT * FROM usuarios WHERE email = '$correo'";
    $resultado = $conexion->query($sql);
    if($resultado->num_rows == 1){
        while($usuario = $resultado->fetch_object()){
            $res = password_verify($password,$usuario->password);
            if($usuario->email === $correo && $res === true){
                $_SESSION["id"] = $usuario->id;
                $_SESSION["usuario"] = $usuario->nombre;
                header('Location:admin/home.php');
            }else{
                session_destroy();
                header('Location:login.php');
            }
        }
    }else{
        header('Location:login.php');
    }
?>


