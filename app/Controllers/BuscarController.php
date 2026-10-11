<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BuscarController extends BaseController
{
    public function index()
    {
        // Obtenemos el valor del query string 'nombre'.
        $nombre = $this->request->getGet('nombre');
        // getGet('nombre') atrapa el valor del query string.
        // /buscar?nombre=Ana → $nombre vale "Ana".

        // Limpiamos el valor recibido eliminando espacios en blanco al inicio y al final.
        $nombre = trim((string) $nombre);

        // $data contiene los datos que se pasarán a la vista.
        $data = [
            'titulo' => 'Ejercicio de query string',
            'nombre' => $nombre,
        ];

        // Pasamos los datos a la vista para mostrar el resultado de la búsqueda.
        return view('buscar/index', $data);
    }
}
