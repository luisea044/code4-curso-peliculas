<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;
use CodeIgniter\HTTP\ResponseInterface;

class Categoria extends BaseController
{
    public function new()
    {
        return view('categoria/new');
    }

    public function create()
    {
        $categoriaModel = new CategoriaModel();
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];
        $categoriaModel->insert($data);
        return redirect()->to(site_url('categoria'));
    }

    public function show($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->find($id);
        return view('categoria/show', ['categoria' => $categoria]);
    }
    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->find($id);
        return view('categoria/edit', ['categoria' => $categoria]);
    }

    public function update($id)
    {
        $categoriaModel = new CategoriaModel();
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];
        $categoriaModel->update($id, $data);
        return redirect()->to(site_url('categoria'));
    }

    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        return redirect()->to(site_url('categoria'));
    }
    

    public function index()
    {
        // Crear una instancia del modelo de categoría y obtener todas las categorías
        $categoriaModel = new CategoriaModel();
        
        // obtener todas las categorías del modelo
        echo view('categoria/index', [
            // Pasar las categorías a la vista
            // categorias es un array con todas las categorías obtenidas del modelo
            'categorias' => $categoriaModel->findAll(),
        ]);
    }
}
