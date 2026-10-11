        <label for="titulo">Título:</label>
        <!-- Campo para el título de la película y su valor actual de la base de datos -->
        <input type="text" id="titulo" name="titulo" value="<?= $pelicula['titulo'] ?>">
        <br>
        <!-- Campo para la descripción de la película y su valor actual de la base de datos -->
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"><?= $pelicula['descripcion'] ?></textarea>
        <br>
        <button type="submit"><?= $op ?></button>