<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <?php include 'iconos.php'; ?>
</main>
    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>
        <?php
            include 'listado.php';
        ?>
        <div class="alinear-derecha">
            <a href="anuncios.php" class="btn-verde">Ver todas</a>
        </div>
    </section><!--.seccion .contenedor-->
    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llene el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="btn-amarillo">Contáctanos</a>
    </section>
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="Imagen Entrada Blog">
                    </picture>
                </div><!-- .imagen -->
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>01/08/2023</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>
            </article><!-- .entrada-blog -->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="Imagen Entrada Blog">
                    </picture>
                </div><!-- .imagen -->
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>01/08/2023</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu hogar</p>
                    </a>
                </div>
            </article><!-- .entrada-blog -->
        </section><!-- .blog -->
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mi exceptativas.</blockquote>
                <p>- Jhonathan Nila</p>
            </div>
        </section>
    </div><!-- .contenedor .seccion -->
<?php