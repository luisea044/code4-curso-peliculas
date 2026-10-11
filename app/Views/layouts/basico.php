<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?= esc($titulo ?? 'Sitio') ?></title>
</head>

<body>

    <header>
        <h2>Mi sitio de práctica</h2>
    </header>

    <main>
        <?= $this->renderSection('contenido') ?>
        <!--
        Este es el "hueco" del layout.
        Aquí aparecerá el contenido de cada vista.
        -->
    </main>

</body>
</html>
