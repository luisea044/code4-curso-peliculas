<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Editar Película</h1>
    <form action="/pelicula/update/<?= $pelicula['id'] ?>" method="post">
        <?= view('pelicula/_form', ['pelicula' => $pelicula, 'op' => 'Actualizar']) ?>
    </form>
    <a href="/pelicula/show/<?= $pelicula['id'] ?>">Cancelar</a>

</body>

</html>