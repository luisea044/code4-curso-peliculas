<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?= esc($titulo) ?></title>
</head>

<body>

    <h1><?= esc($titulo) ?></h1>

    <!-- Formulario de búsqueda por nombre. -->
    <form action="<?= site_url('buscar-ejercicio') ?>" method="get">

        <!-- Campo de entrada para el nombre. -->
        <label for="nombre">Nombre</label>

        <!-- Campo de entrada para el nombre. -->
        <input
            type="text"
            id="nombre"
            name="nombre"
            value="<?= esc($nombre) ?>">

        <button type="submit">Enviar búsqueda</button>
    </form>
    <!-- Mostramos el resultado de la búsqueda si se recibió un nombre. -->
    <?php if ($nombre !== ''): ?>

        <p>
            El controlador recibió:
            <strong><?= esc($nombre) ?></strong>
        </p>

    <?php endif ?>

</body>

</html>