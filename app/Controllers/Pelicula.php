<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController
{
    public function new()
    {
        $pelicula = ['titulo' => '', 'descripcion' => ''];

        return view('pelicula/new', ['pelicula' => $pelicula, 'op' => 'Crear']);
    }

    public function show($id)
    {
        //        echo 'show ' . $id;

        $peliculaModel = new PeliculaModel();
        //        var_dump($peliculaModel->find($id)['titulo']);
        echo view('pelicula/show', [
            'pelicula' => $peliculaModel->find($id),
        ]);
    }

    public function create()
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);

        echo 'Película creada correctamente';
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();

        $pelicula = $peliculaModel->find($id);

        if (!$pelicula) {
            throw new \Exception('Película no encontrada');
        }

        return view('pelicula/edit', [
            'pelicula' => $pelicula,
        ]);
    }
    
    public function update($id)
    {
        $peliculaModel = new PeliculaModel();
        // Verificar si la película existe antes de actualizarla
        $pelicula = $peliculaModel->find($id);

        // Si no existe, lanzar una excepción
        if (!$pelicula) {
            // Lanzar excepción si la película no existe
            throw new \Exception('Película no encontrada');
        }

        // Actualizar la película con los nuevos datos
        $peliculaModel->update($id, [
            // Campos a actualizar
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);

        echo 'Película actualizada correctamente';
    }

    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        // Buscar la película por su ID
        $pelicula = $peliculaModel->find($id);

        // Verificar si la película existe antes de eliminarla
        if (!$pelicula) {
            throw new \Exception('Película no encontrada');
        }
        // Eliminar la película de la base de datos
        $peliculaModel->delete($id);

        echo 'Película eliminada correctamente';
    }


    public function index()
    {
        $peliculaModel = new PeliculaModel();

        echo view('pelicula/index', [
            'peliculas' => $peliculaModel->findAll(),
        ]);


    }
}
