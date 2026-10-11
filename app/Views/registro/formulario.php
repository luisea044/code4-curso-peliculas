<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?= esc($titulo) ?></title>
</head>

<body>

    <h1><?= esc($titulo) ?></h1>
    <!-- Formulario de registro -->
    <!-- site_url('registro/procesar') genera la URL completa para el formulario. -->
    <form action="<?= site_url('registro/procesar') ?>" method="post">
        <!-- method="post" define el camino por el que viajará el dato. -->

        <label for="nombre">Nombre</label>

        <!-- Campo de entrada para el nombre. -->
        <input
            // Atributos del campo de entrada para el nombre.
            type="text"
            id="nombre"
            name="nombre"
            required
        >
        <!-- name="nombre" debe coincidir con getPost('nombre'). -->

        <button type="submit">Enviar</button>
    </form>

</body>
</html>
