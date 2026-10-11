<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Categoría</h1>
    <form action="<?= site_url('categoria/update/' . $categoria['id']) ?>" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="<?= $categoria['titulo'] ?>" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required><?= $categoria['descripcion'] ?></textarea>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <form action="<?= site_url('categoria') ?>" method="get" style="display:inline;">
        <button type="submit">Cancelar</button>
    </form>
</body>
</html>