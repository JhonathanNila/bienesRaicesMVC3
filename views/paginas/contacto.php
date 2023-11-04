<main class="contenedor seccion">
    <h1>Contacto</h1>
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
            <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" required>
                <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Email" id="email" name="contacto[email]" required>
                <label for="telefono">Teléfono</label>
            <input type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]">
                <label for="mensaje">Mensaje:</label>
            <textarea name="contacto[mensaje]" id="mensaje" cols="30" rows="10" required></textarea>
        </fieldset>
        <fieldset>
            <legend>Información Sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
            <select name="contacto[tipo]" id="opciones" required>
                <option value="" disabled selected>-- Seleccione</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
                <label for="">Precio o Presupuesto</label>
                    <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" name="contacto[precio]" required>
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required>
                <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email" name="contacto[contacto]"required>
            </div>
            <p>Si eligió teléfono, elija una fecha y la hora</p>
                <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="contacto[fecha]">
                <label for="hora">Hora</label>
                    <input type="time" id="hora" min="09:00" max="19:00" name="contacto[hora]">
        </fieldset>
            <input type="submit" value="Enviar" class="btn-verde">
    </form>
</main>