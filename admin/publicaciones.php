<?php
    session_start();
    include_once "./componentsadmin/headeradmin.php";
    include_once "./componentsadmin/menuadmin.php";
    require_once "../config/conexion.php";
    $usuario = $_SESSION['usuario'];
    $idusuario = $_SESSION["id"];
    if(isset($usuario)):
?>
    <a href="cerrar.php" class="logueado"><?=$usuario?></a>
    <h2 class="subtitulos">Publicaciones</h2>
    <form class="publicaciones" action="regpublicaciones.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" required>
        </div>
        <div>
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="Publicar">
            <input type="reset" value="Limpiar">
        </div>
    </form>
    <h2 class="subtitulos">Listado de las Publicaciones</h2>
    <table class="listado">
        <thead>
            <!-- <th>Nro</th> -->
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th colspan="2">Operaciones</th>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM notas WHERE usuario_id = $idusuario";
                $resultado = $conexion->query($sql);
                while($datos = $resultado->fetch_object()):
            ?>
            <tr>
                <!-- <td><?=$datos->id?></td> -->
                <td><?=$datos->titulo?></td>
                <td><img class="imagen-auto" src="<?=$datos->imagen?>" alt=""></td>
                <td><?=$datos->descripcion?></td>
                <td><?=$datos->fecha?></td>
                <td><a href="modformpublicaciones.php?action=<?=$datos->id?>">Editar</a></td>
                <td><a href="eliminarpublicaciones.php?action=<?=$datos->id?>">Eliminar</a></td>
            </tr>
            <?php
                endwhile;
            ?>
        </tbody>
    </table>
<?php
    else:
        header('Location:login.php');
    endif;
    include_once "./componentsadmin/footeradmin.php";
?>