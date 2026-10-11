<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SaludoController extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Saludo desde CodeIgniter',
            'mensaje' => 'La ruta GET llegó correctamente al controlador.',
        ];

        return view('saludo/index', $data);
    }
}
