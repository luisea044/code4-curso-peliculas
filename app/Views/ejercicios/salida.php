<?php
// Aquí usamos PHP normal para CREAR una variable.
$nombre = 'Ana';
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ejercicio de salida PHP</title>
</head>

<body>

    <h1>Primera salida</h1>

    <p>
        Nombre:
        
        <?= esc($nombre) ?>
        <!--
        <_?= ... ?_> significa: "muestra este valor aquí".
        esc($nombre) protege el contenido antes de insertarlo en HTML.
        esc() es una función de CodeIgniter que escapa caracteres especiales para evitar problemas de seguridad como XSS.
        -->
    </p>

</body>
</html>
