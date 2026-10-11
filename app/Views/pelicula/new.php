<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Película</title>
</head>

<body>
    <h1>Crear Película</h1>
    <form action="<?= site_url('pelicula/create') ?>" method="post">
        <!-- Incluir el formulario parcial para crear una nueva película -->
        <!-- pelicula/form permite reutilizar el formulario para crear y editar películas -->
        <!-- pelicula es el arreglo que contiene los datos de la película -->
         
        <?= view('pelicula/_form', ['pelicula' => ['titulo' => '', 'descripcion' => ''], 'op' => 'Crear']) ?>
    </form>
</body>

</html>