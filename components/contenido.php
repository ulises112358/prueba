<?php
    require_once "./config/conexion.php";
?>
<div class="banner"></div>
<div class="colores">
    <div class="red" id="red"></div>
    <div class="blue" id="blue"></div>
    <div class="green" id="green"></div>
</div>
<h2 class="subtitulo">MODELOS DE AUTOMOVIL</h2>
<section class="contenido" id="contenido">
    <?php
        $sql = "SELECT * FROM notas";
        $resultado = $conexion->query($sql);
        while($datos = $resultado->fetch_object()):
    ?>
    <div class="articulo">
        <img class="imagen-index" src="<?="admin/".$datos->imagen?>" alt="rojo">
        <h3><?=$datos->titulo?></h3>
        <p><?=$datos->descripcion?></p>
        <a href="#" class="enlace">Leer mas...</a>
    </div>
    <?php
        endwhile;
    ?>
</section>