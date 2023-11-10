<main class="contenedor seccion">
    <h1>Contacto</h1>
    <?php if($mensaje) { ?>
            <p class='alerta exito'> <?php echo $mensaje; ?></p>;
    <?php } ?>    
    <picture>
        <source srcset="build/img/destacada3.webp" type="imagen/webp">
        <source srcset="build/img/destacada3.jpg" type="imagen/jpeg">
        <img src="build/img/destacada3.jpg" alt="Imagen de Contactanos" loading="lazy">
    </picture>
    <h2>Llene el formulario de Contacto</h2>
    <form action="/contacto" class="formulario" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]">
                <label for="mensaje">Mensaje:</label>
            <textarea name="contacto[mensaje]" id="mensaje" cols="30" rows="10"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información Sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
            <select name="contacto[tipo]" id="opciones">
                <option value="" disabled selected>-- Seleccione</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
                <label for="">Precio o Presupuesto</label>
                    <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" name="contacto[precio]">
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" >
                <label for="contactar-email">E-mail</label>
                    <input type="radio" value="email" id="contactar-email" name="contacto[contacto]">
            </div>
            <div id="contacto"></div>
        </fieldset>
            <input type="submit" value="Enviar" class="btn-verde">
    </form>
</main>