<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MensajeController extends BaseController
{
    public function index()
    {
        $data = [
            // Esto es un "arreglo de datos".
            // Título de la página.
            'titulo' => 'Mi primera página',
            // En la vista existirá una variable llamada $titulo.

            'body' => 'Este es el contenido del cuerpo de la página.',
            // En la vista existirá una variable llamada $body.

            // Mensaje a mostrar en la página.
            'mensaje' => 'El controlador preparó este texto.',
            // En la vista existirá una variable llamada $mensaje.
        ];

        return view('mensajes/index', $data);
        // Abre app/Views/mensajes/index.php
        // y entrega del arreglo $data.

    }
}
