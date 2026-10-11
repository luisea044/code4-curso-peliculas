<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CursoController extends BaseController
{
    // Lista de cursos disponibles.
    private array $cursos = [
        1 => 'Programación Web',
        2 => 'Base de Datos',
        3 => 'Seguridad de Redes',
    ];

    // Esta función muestra el detalle de un curso específico.
    public function detalle($id)
    {
        // $id llega desde la ruta.
        // Si abrimos /curso/2, aquí $id vale 2.

        // Buscamos el curso correspondiente al ID proporcionado.
        $curso = $this->cursos[$id] ?? null;
        // Buscamos el curso usando el ID.
        // Si no existe, usamos null.

        // Si no encontramos el curso, $curso será null.
        if ($curso === null) {
            // Retornamos una respuesta 404 indicando que el curso no fue encontrado.
            return $this->response
                ->setStatusCode(404)
                // Indicamos que el curso no fue encontrado.
                ->setBody('Curso no encontrado.');
        }

        $data = [
            'titulo' => 'Detalle del curso',
            'id' => $id,
            'curso' => $curso,
        ];

        // Pasamos los datos a la vista para mostrar el detalle del curso.
        return view('cursos/detalle', $data);
    }
}
