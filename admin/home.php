<?php
    session_start();
    include_once "componentsadmin/headeradmin.php";
    include_once "componentsadmin/menuadmin.php";
    $usuario = $_SESSION["usuario"];
    if(isset($usuario)):
?>
<a href="cerrar.php" class="logueado"><?=$usuario?></a>
<h2 class="subtitulos">NOTIFICACIONES</h2>
<?php
    else:
        header('Location:../login.php');
    endif;
    include_once "../components/footer.php";
?>