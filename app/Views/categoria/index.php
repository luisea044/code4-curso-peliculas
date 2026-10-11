<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Categorías</h1>
    <form action="<?= site_url('categoria/new') ?>" method="get" style="display:inline;">
        <button type="submit">Crear</button>
    </form>

    <table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($categorias as $categoria => $c): ?>
    <tr>
        <td><?= $c['id'] ?></td>
        <td><?= $c['titulo'] ?></td>
        <td><?= $c['descripcion'] ?></td>
        <td>
            <a href="/categoria/show/<?= $c['id'] ?>">Show</a>
            <a href="/categoria/edit/<?= $c['id'] ?>">Editar</a>
            <form action="/categoria/delete/<?= $c['id'] ?>" method="post" style="display:inline;">
                <button type="submit">Eliminar</button>
            </form>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>



</body>
</html>