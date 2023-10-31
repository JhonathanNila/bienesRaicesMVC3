<main class="contenedor seccion">
    <h1>Administrador de Bienes Raíces</h1>
    <?php
        if($resultado) {
            $mensaje = mostrarNotificaciones(intval($resultado));
            if($mensaje) { ?>
                <p class="alerta exito"><?php echo s($mensaje);?></p>
        <?php }
        }
    ?>
    <a href="/propiedades/crear" class="btn btn-verde">Nueva Propiedad</a>
    <a href="/admin/vendedores/crear.php" class="btn btn-amarillo">Nuevo(a) Vendedor(a)</a>
    <h2>Propiedades</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody><!-- Mostrar los resultados -->
        <?php foreach ($propiedades as $propiedad):  ?>
            <tr>
                <td><?php echo $propiedad->id; ?></td>
                <td><?php echo $propiedad->titulo; ?></td>
                <td><img src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="Imagen de Propiedad" class="imagen-tabla"></td>
                <td>$<?php echo $propiedad->precio; ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $propiedad->id;?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" class="boton-rojo-block w-100" value=Eliminar>
                    </form>
                        <a class="btn-amarillo-block" href="/propiedades/actualizar?id=<?php echo $propiedad->id; ?>">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>