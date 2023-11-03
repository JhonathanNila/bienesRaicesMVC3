<?php
    use App\Propiedad;

    IF($_SERVER['SCRIPT_NAME'] === '/anuncios.php') {
        $propiedades = Propiedad::all();
    } else {
        $propiedades = Propiedad::get(3);
    }
?>

<div class="contenedor-anuncios">
    <?php foreach($propiedades as $propiedad) { ?>
        <div class="anuncio">
            <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="Imagen Anuncio">
                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad->titulo; ?></h3>
                    <p class="text-box"><?php echo substr($propiedad->descripcion, 0, 100); ?></p>
                    <p class="precio">$<?php echo $propiedad->precio; ?></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                            <p><?php echo $propiedad->wc; ?></p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                            <p><?php echo $propiedad->estacionamientoa; ?></p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p><?php echo $propiedad->habitaciones; ?></p>
                        </li>
                    </ul>
                    <a href="anuncio.php?id=<?php echo $propiedad->id;?>" class="btn-amarillo">Ver propiedad</a>
                </div><!--.contenido-anuncio-->
        </div><!--.anuncio-->
    <?php } ?>
</div><!--.contenedor-anuncios-->
