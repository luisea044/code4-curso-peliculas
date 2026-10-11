<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ListaController extends BaseController
{
    public function index()
    {
        // Creamos un arreglo con los estudiantes.
        $estudiantes = [
            // Arreglo con tres estudiantes.
            ['nombre' => 'Ana'],
            ['nombre' => 'Luis'],
            ['nombre' => 'Carla'],
        ];
        // Preparamos los datos para la vista.
        $data = [
            // Título de la página.
            'titulo' => 'Lista de estudiantes',

            // Arreglo con los estudiantes.
            'estudiantes' => $estudiantes,
            // La vista recibirá una variable $estudiantes.
        ];

        // Retornamos la vista con los datos preparados.
        return view('listas/estudiantes', $data);
    }
}
