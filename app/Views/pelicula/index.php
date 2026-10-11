<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de Películas</h1>

    
    <form action="<?= site_url('pelicula/new') ?>" method="get" style="display:inline;">
        <button type="submit">Crear</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
        <!-- Recorremos todas las películas y las mostramos en la tabla -->
        <?php foreach ($peliculas as $key => $p): ?>
            <!-- // Mostramos cada película en una fila de la tabla -->
            <tr>
                <!-- Mostramos el ID de la película en una celda de la tabla -->
                <td><?= $p['id'] ?></td>

                <!-- Mostramos el título de la película en una celda de la tabla -->
                <td><?= $p['titulo'] ?></td>
                <!-- Mostramos la descripción de la película en una celda de la tabla -->
                <td><?= $p['descripcion'] ?></td>

                <td>
                    <!-- Opciones para cada película: Editar, Ver y Eliminar -->
                    <a href="<?= site_url('pelicula/show/' . $p['id']) ?>">Show</a>
                    <a href="<?= site_url('pelicula/edit/' . $p['id']) ?>">Editar</a>

                    <form action="/pelicula/delete/<?= $p['id'] ?>" method="post" style="display:inline;">
                        <button type="submit">Eliminar</button>
                    </form>
            
                </td>

            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>