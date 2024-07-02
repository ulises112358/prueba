<?php
    session_start();
    include_once "./componentsadmin/headeradmin.php";
    include_once "./componentsadmin/menuadmin.php";
    require_once "../config/conexion.php";
    $usuario = $_SESSION['usuario'];
    $idusuario = $_SESSION["id"];
    $idpublicaciones = $_GET["action"];
    if(isset($usuario)):
        $sql = "SELECT * FROM notas WHERE id = $idpublicaciones";
        $resultado = $conexion->query($sql);
        while($datos = $resultado->fetch_object()):
?>
    <a href="cerrar.php" class="logueado"><?=$usuario?></a>
    <h2 class="subtitulos">Editar Publicaciones</h2>
    <form class="publicaciones" action="modpublicaciones.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="id" value="<?=$idpublicaciones?>">
        </div>
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="<?=$datos->titulo?>" required>
        </div>
        <div>
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="" cols="30" rows="10"><?=$datos->descripcion?></textarea>
        </div>
        <div>
            <input type="submit" value="Actualizar">
        </div>
    </form>
<?php
        endwhile;
    else:
        header('Location:login.php');
    endif;
    include_once "./componentsadmin/footeradmin.php";
?>