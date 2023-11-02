<main class="contenedor seccion">
    <h1>Registrar Vendedor(a)</h1>
    <a href="/admin" class="btn btn-verde">Volver</a>
    <?php foreach($errores as $error):?>
        <div class="alerta error">
        <?php echo $error;?>
        </div>
    <?php endforeach; ?>
    <form action="/vendedores/crear" class="formulario" method="POST"">
        <?php include 'formulario.php'; ?>
        <input type="submit" value="Registrar Vendedor(a)" class="btn btn-verde">
    </form>
</main>