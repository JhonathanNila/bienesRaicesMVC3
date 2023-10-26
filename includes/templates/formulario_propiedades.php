<fieldset>
            <legend>Información General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad" name="propiedad[titulo]" value="<?php echo s($propiedad->titulo); ?>">
            <label for="precio">Precio:</label>
            <input type="number" id="precio" placeholder="Precio Propiedad" name="propiedad[precio]" value="<?php echo s($propiedad->precio); ?>">
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="propiedad[imagen]">
                <?php if($propiedad->imagen) { ?>
                <img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-small">
                <?php }?>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="propiedad[descripcion]"><?php echo s($propiedad->descripcion); ?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información General</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="numb" id="habitaciones" placeholder="Ej: 3" min="1" max="10" name="propiedad[habitaciones]" value="<?php echo s($propiedad->habitaciones); ?>">
            <label for="WC">Baños:</label>
            <input type="numb" id="WC" placeholder="Ej: 3" min="1" max="10" name="propiedad[wc]" value="<?php echo s($propiedad->wc); ?>">
            <label for="estacionamiento">Estacionamiento:</label>
            <input type="numb" id="estacionamientoa" placeholder="Ej: 3" min="1" max="10" name="propiedad[estacionamiento]" value="<?php echo s($propiedad->estacionamientoa); ?>">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
                <select name="propiedad[vendedores_id]" id="vendedor">
                    <option selected value="">-- Seleccione --</option>
                        <?php foreach($vendedores as $vendedor) { ?>
                    <option
                        <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : ''; ?>
                        value="<?php echo s($vendedor->id) ?>"><?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?>
                    </option>
                    <?php } ?>
                </select>
        </fieldset>