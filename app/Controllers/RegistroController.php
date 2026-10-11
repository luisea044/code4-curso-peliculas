<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RegistroController extends BaseController
{
    public function formulario()
    {   
        // Preparar los datos para la vista del formulario
        $data = [
            'titulo' => 'Formulario de prueba POST',
        ];

        // Retornar la vista del formulario con los datos preparados.
        return view('registro/formulario', $data);
    }

    public function procesar()
    {
        // Capturar el dato enviado por POST desde el formulario.
        $nombre = $this->request->getPost('nombre');
        // getPost('nombre') atrapa lo escrito
        // en el input cuyo name es "nombre".

        // Limpiar el dato recibido eliminando espacios en blanco al inicio y al final.
        $nombre = trim((string) $nombre);

        $data = [
            'titulo' => 'Dato recibido por POST',
            'nombre' => $nombre,
        ];

        // Retornar la vista del resultado con los datos preparados.
        return view('registro/resultado', $data);
    }
}
